<template>
  <div class="wrapper-wide">
    <loading :active.sync="isLoading" :can-cancel="true" :is-full-page="fullPage"></loading>
    <frontend-header></frontend-header>
    <div id="container" v-if="!isLoading">
      <div class="container">
        <div class="single-product-box" >
          <div class="row">
            <div class="col-lg-4">
                <div>
              <div class="row product-info">
                <div class="col-lg-6 col-md-6 product-image-viewer" style="margin-bottom:195px;"  >
                  <ProductZoomer :base-images="product_images" :base-zoomer-options="zoomerOptions" v-if="Object.keys(product_images).length" />
                  </div>
              
              </div>
             </div>
            </div>
            <div class="col-lg-4">
               <ul class="list-unstyled description">
                  <li>
                 <h2 class="title" itemprop="name">{{ product.name }}</h2>

                  </li>
                    <li>
                      <h4>
                        <b>Product Code:</b>
                        <span itemprop="mpn">{{ product.product_code }}</span>
                      </h4>
                    </li>
                    <li>
                      <h4>
                        <b>Availability:</b>
                        <span class="instock" v-if="product.stock > 0">Stock In <small>({{product.stock }})</small></span>
                        <span class="outstcok" v-else>Stock Out</span>
                      </h4>
                    </li>
                  </ul>
                  <ul class="price-box">
                    <li class="price">
                     <h3>
                     
                        <span class="price-old" v-if="product.discount">&#2547 {{product.sale_price}}</span>
                      <span class="price-new">&#2547 {{product.price}}</span>
                     </h3>
                    </li>
                    <li></li>
                  </ul>
                  <div id="product">
                    <div v-if="product.product_variant.length>0 && product.product_attribute">
                      <!-- <h3 class="subtitle">Available Options</h3> -->
                      <div class="form-group required">
                        <h4 class="control-label">
                          <b>{{ product.product_attribute.attribute.name }}</b>
                        </h4>
                        <select
                          class="form-control"
                          v-model="variant_index"
                          @change="SelectVaraint"
                          name="option[200]"
                        >
                          <option value disabled>--- Please Select ---</option>
                          <option
                            value
                            v-for="(variant,v) in product.product_variant"
                            :key="v"
                            :value="v"
                          >{{variant.variant.name}}</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class>
                          <h4 class="control-label" for="input-quantity">
                            <b>Quantity</b>
                          </h4>
                          <input
                            type="number"
                            name="quantity"
                            v-model="cart.quantity"
                            size="2"
                            value="1"
                            class="form-control"
                            @change="validation"
                            @keyup="validation"
                          />

                          <div class="clear"></div>
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <button
                          @click.prevent="CartToAdd"
                          type="button"
                          id="button-cart"
                          class="btn btn-primary btn-lg btn-block"
                          style="margin-top:38px;"
                         
                         
                        >Add to Cart</button>
                      </div>
                    </div>
                  </div>
            </div>
         </div>
        </div>
          
          <div class="product-details-tabe">
               <ul class="details-tab-menu-list">
                  <li class="details-tab-menu-item"  @click="tab_content=1" :class="{'tab-menu-item-active':tab_content==1}">Description</li>
                    <li class="details-tab-menu-item" @click="tab_content=2" :class="{'tab-menu-item-active':tab_content==2}" >How To Buy</li>
                      <li class="details-tab-menu-item"  @click="tab_content=3" :class="{'tab-menu-item-active':tab_content==3}">Return Policy</li>
                 </ul>
              <div class="product-tab-content">
                <div v-html="product.details" class="product-details" :class="{block:tab_content==1}"></div>
                <div class="how-to-buy" :class="{block:tab_content==2}">
                  <ul>
                    <li class="h-b-li">Select number of product you want to buy.</li>
                    <li class="h-b-li">Click <strong>Add To Cart</strong> Button</li>
                    <li class="h-b-li">Then go to checkout page</li>
                    <li class="h-b-li">If you are a new user, please click on Sign Up.provide us uour valid inormation information.</li>
                    <li class="h-b-li">Complete your checkout, we received your order, and for order confirmation or customer service contact with you</li>
                  </ul>
                </div>
                 <div class="how-to-buy"  :class="{block:tab_content==3}">
                  <ul>
                    <li class="h-b-li">If your product is damaged, defective, incorrect or incomplete at the time of delivery, please file a return request on call to customer care support number within 3 days of the delivery date</li>
                    <li class="h-b-li">Change of mind is not applicable as a Return Reason for this product</li>
                  
                  </ul>
                </div>

              </div>
              </div>
          
      
        <div class="row realted-producs">
            <h3 class="title" >Related Products</h3>
             <div class="col-lg-3 col-sm-6 col-md-6 col-xs-6 width-20" v-for="(product,index) in related_products" :key="index">
            <div class="product-card small-card">
              <div class="prodict-card-body">
                <router-link :to="{name: 'single', params: { slug: product.slug } }">
                  <img :src=" base_url +product.product_image[0].product_image"/>
                </router-link>
                <div class="product-detail small-detail">
                  <h4>   <router-link class="product-link" :to="{name: 'single', params: { slug: product.slug } }">{{ product.name }}</router-link ></h4>
                  <p class="price">
                    <span class="price-new">{{
                      product.price
                    }}</span>
                    <span
                      class="price-old"
                      v-if="product.discount"
                      >{{ product.sale_price }}</span
                    >
                    <!-- <span class="saving">-26%</span> -->
                  </p>
                </div>
              </div>
               <div class="product-card-footer">
                    <button class="btn btn-primary btnQuick" style="cursor:pointer" @click="quick_v_product_id=product.id"  >view</button>
              </div>
            </div>
          </div>
           <infinite-loading @infinite="getRelatedProducts">
            <div slot="no-more"></div>
          </infinite-loading>
       
      </div>
      
      </div>
    </div>
    <frontend-footer></frontend-footer>
      <quick-view v-if="quick_v_product_id" v-on:clicked="closedModal($event)" :quick_v_p_id="quick_v_product_id">  </quick-view>
    
  </div>

</template>


<script>
import Loading from "vue-loading-overlay";
import "vue-loading-overlay/dist/vue-loading.css";

export default {
  beforeCreated() {
    this.validation();
    window.scrollTo(0, 0);
    setTimeout(() => {
      this.validation();
    }, 200);
  },
  data() {
    return {
      isLoading: true,
      fullPage: true,
      disabled: true,
      variant_index: "",
      base_url: this.$store.state.image_base_link,
       cart: {
        product_id: "",
        variant_id: "",
        attrribute_id: "",
        quantity: 1,
      },
      related_products: [],
      page: 1,
      tab_content:1,
      quick_v_product_id:"",
      o_modal:false,
      zoomerOptions: {
        zoomFactor: 4,
        pane: "pane",
        hoverDelay: 300,
        namespace: "zoomer-left",
        move_by_click: true,
        scroll_items: 4,
        choosed_thumb_border_color: "#ff3d00",
        scroller_position: "bottom",

        // zoomer_pane_position: "right",
      },
    };
  },
  methods: {
  
    CartToAdd() {
      axios
        .get("/_public/addToCart", {
          params: {
            slug: this.$route.params.slug,
            attribute_id: this.cart.attrribute_id,
            variant_id: this.cart.variant_id,
            quantity: this.cart.quantity,
          },
        })
        .then((resp) => {
         // console.log(resp);
          if (resp.data.status == "SUCCESS") {
            this.$toasted.show(resp.data.message, {
              position: "bottom-left",
              type: "success",
              duration: 2000,
            });
            this.$store.dispatch("getCartContent");
          } else if (resp.data.status == "error") {
            this.$toasted.show(resp.data.message, {
              position: "bottom-center",
              type: "error",
              duration: 20000,
            });
          }
        })
        .then((error) => {
          // console.log(error);
        });
    },
    validation() {
      if (this.cart.quantity < 1) {
        this.cart.quantity = 1;
        alert("Quantity at least 1");
        return;
      }
      if (this.product.product_attribute) {
        if (this.cart.attrribute_id < 1) {
          this.disabled = true;
        } else {
          this.disabled = false;
        }
      } else {
        this.disabled = false;
      }
    },
    SelectVaraint() {
     // this.product.product_variant.length=0;
      let index = this.variant_index;
      let variant_id = this.product.product_variant[index].variant_id;
      let attribute_id = this.product.product_variant[index].variant.attribute_id;
      this.cart.attrribute_id = attribute_id;
      this.cart.variant_id = variant_id;
      this.validation();
    },

    getRelatedProducts($state) {
      axios
        .get("/_public/related/products/?page=" + this.page, {
          params: {
            product_slug: this.$route.params.slug,
          },
        })
        .then((resp) => {
          if (resp.data.data.length) {
            this.page += 1;
            this.related_products.push(...resp.data.data);
            $state.loaded();
          } else {
            $state.complete();
          }
        })
        .catch((error) => {
         // console.log(error);
        });
    },
      closedModal(close){
       this.quick_v_product_id="";
    }

  
  },

  mounted() {
   this.getRelatedProducts();
  this.$store.dispatch("product_images", this.$route.params.slug);

   this.$store.dispatch("single_product", this.$route.params.slug);

  },

  computed: {
    product() {
      return this.$store.getters.single_product;
    },
    product_images(){

      return this.$store.getters.product_images;
    },
    
  },

  components: {
    Loading,
  },

  watch:{
    product_images:function(value){
      //console.log(value.length);
      if(Object.keys(value).length>0){
       this.isLoading=false;
      }
      
    }
  }
};
</script>

<style scoped>
img.responsive-image.preview-box {
  width: 350px !important;
  height: 350px !important;

}

.product-details-tabe {
  margin-top: 20px;
}


.btnQuick:hover{

   background: #ff4d03; 

}

@media screen and (max-width: 350px) {

  img.responsive-image.preview-box {
    width: 85% !important;
    margin-left: -80px;
   }

   .product-info {
  	margin-bottom: -160px;
  }

    .product-details{
      margin-left: -16px;
    } 
    ul {

    list-style: none;
    margin-left: -16px;
    margin-right: 3px;
    
    }

    .r_title {
        margin-left:20px;
    }

    h4{ font-size: 16px ;}
    h2{ font-size: 20px ;}

  .small-card  
    {
    width: 100%;
    height: auto;
    background: #fff;
    border: 1px solid #ddd;
    text-align: center;
    margin-bottom: 25px;
    }

  .small-card  p
    {
    font-size: 13px;
    line-height: 0px;
    margin-top: -5px;
    }

  .small-detail h4 
    {
    font-size: 13px;
    padding-bottom: 3px;
    margin-top: -5px !important;
    }


  .small-card img
    {
    padding-bottom:0px;
    width: 120px !important;
    height: 130px !important;
    transition: .3s;
   }

   .details-tab-menu-list li{

       font-size: 11px !important;

   }




}


</style>