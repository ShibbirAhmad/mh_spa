<template>
  <div class="wrapper-wide">
    <frontend-header></frontend-header>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <carousel
              v-if="sliders"
              :items="1"
              :nav="false"
              :autoplay="true"
              :autoplayTimeout="2000"
            >
              <a v-for="slider in sliders" :href="slider.url" :key="slider.id">
                <img :src="base_url + slider.image" />
              </a>
            </carousel>
          </div>
        </div>
  
    <div class="container">

      <!-- <div class="row service_row">

          <div class="col-md-6 col-sm-12">
            
            <div class="service_container">
              <div class="service_outer">
              <div class="service_inner"> 
                  <i  class="fa fa-truck service_icon"> </i>
              </div>            
             </div>
            <p class="service_description1"> FIRST SHIPPING IN WHOLE BANGLADESH </p>
           </div>
       
         
           <div class="service_container">
              <div class="service_outer">
              <div class="service_inner"> 
                  <i  class="fa fa-exchange service_icon"> </i>
              </div>            
             </div>
            <p  class="service_description2"> REPLACEMENT WITH-IN 7 DAYS </p>
           </div>

       </div>


           <div class="col-md-6 col-sm-12 service_optional">

             <div class="service_container">
              <div class="service_outer">
              <div class="service_inner"> 
                  <i style="margin-left:15px" class="fa fa-thumbs-up service_icon"> </i>
              </div>            
             </div>
            <p class="service_description3"> BEST QUALITY PRODUCTS </p>
           </div>
       
         
           <div class="service_container">
              <div class="service_outer">
              <div class="service_inner"> 
                  <i style="margin:14px;" class="fa fa-headphones service_icon"> </i> 
              </div>            
             </div>
            <p class="service_description4"> 24/7 ONLINE SUPPORT </p>
           </div>
            
        </div>


      </div> -->

      <div class="new_arrival_section">
        <h4 class="arrival_heading">New Arrivals</h4>
        <div class="row" >
            <div
              class="col-lg-2 col-sm-6 col-md-2 col-xs-6"
              v-for="new_arrival_product in new_arrival_products.data"
              :key="new_arrival_product.id"
            >
              <div class="new_arrival_card ">
                <div class="new_arrival_card_body ">
                  <router-link
                    :to="{
                      name: 'single',
                      params: { slug: new_arrival_product.slug },
                    }"
                  >
                    <img
                      v-if="new_arrival_product.product_image.length"
                      :src="
                        base_url +
                        new_arrival_product.product_image[0].product_image
                      "
                    />
                  </router-link>
                    <p>
                      <router-link
                        class="arrival_link"
                        :to="{
                          name: 'single',
                          params: { slug: new_arrival_product.slug },
                        }"
                        >{{ new_arrival_product.name }}</router-link
                      >
                    </p>
                </div>
              </div>
            </div> 
               <pagination  :data="new_arrival_products" :limit="1"
                      @pagination-change-page="getNewArrivalProducts">
                      <!-- <span slot="prev-nav">&lt; </span>
	                    <span slot="next-nav"> &gt;</span> -->
                      
                 </pagination>
  
        </div>
      </div>

      <div v-if="isScroll > 0">
        <div class="banner">
          <div class="row">
            <h4 class="banner_title">categories</h4>
            <div class="banner_container">
              <div
                class="col-lg-2 col-md-2 col-sm-6 col-xs-4"
                v-for="offer in getOffers"
                :key="offer.id"
              >
                <a :href="offer.url" target="_blank" class="">
                  <img
                    title="offer"
                    alt="offer"
                    :src="base_url + offer.image"
                  />
                  <div
                    class="overlaw-offer"
                    :class="{ 'overlaw-offer-height': offer.id % 2 == 0 }"
                  ></div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div
          class="product_carousel sale_campaign"
          v-if="Object.keys(flash_sale_products).length"
        >
          <h3>Flash Sale</h3>
          <carousel
            v-if="Object.keys(flash_sale_products).length"
            :nav="false"
            :autoplay="true"
            :autoplayTimeout="4000"
            :responsive="{ 0: { items: 2 }, 600: { items: 7 } }"
          >
            <div
              class="product-thumb clearfix"
              v-for="flash_sale_product in flash_sale_products"
              :key="flash_sale_product.id"
            >
              <div class="image">
                <router-link
                  :to="{
                    name: 'single',
                    params: { slug: flash_sale_product.slug },
                  }"
                >
                  <img
                    v-if="flash_sale_product.product_image.length"
                    :src="
                      base_url +
                      flash_sale_product.product_image[0].product_image
                    "
                    :alt="flash_sale_product.name"
                    :title="flash_sale_product.name"
                    class="img-responsive"
                  />
                </router-link>
              </div>
              <div class="caption">
                <h4>
                  <router-link
                    :to="{
                      name: 'single',
                      params: { slug: flash_sale_product.slug },
                    }"
                    >{{ flash_sale_product.name }}</router-link
                  >
                </h4>
                <p class="price">
                  <span class="price-new">{{ flash_sale_product.price }}</span>
                  <span class="price-old" v-if="flash_sale_product.discount">{{
                    flash_sale_product.sale_price
                  }}</span>
                </p>
              </div>
            </div>
          </carousel>
        </div>
      
        
        <div class="row offer_collection">
          <div class="col-lg-6  col-md-6">
             <div class="row">
               <div class="col-md-6  col-sm-6">

               </div>
               <div class="col-md-6  col-sm-6">
                    <div class="row">
                      <div class="col-md-6 col-sm-6"> </div>
                      <div class="col-md-6 col-sm-6"> </div>
                    </div>
               </div>
             </div>
          </div>
          
          <div class="col-lg-6 col-md-6">
            
          </div>
        </div>

        

        <div v-if="sub_categories.length <= 0">
          <h1 class="text-center"><i class="fa fa-spin fa-spinner"></i></h1>
        </div>
        <div v-else>
          <div
            class="c-product"
            v-for="(sub_category, idx) in sub_categories"
            :key="idx"
            v-if="sub_category.products.length"
          >
            <!-- category name  -->

            <div class="c-product-header">
              <h4 class="category-heading">{{ sub_category.name }} </h4> <span class="arrow_icon" ><b>......  </b> 
                        <router-link
                  :to="{
                    name: 'PublicSubCategory',
                    params: { slug: sub_category.slug },
                  }"
                  class="c-v-all"
                  ><i  class="fa fa-arrow-right"> </i>
                </router-link>
               
              
              </span> 
              <div
                class="s-category"
                v-if="sub_category.sub_sub_category.length > 0"
              >
              <div :id="'subCategoryNameView'+sub_category.id"   class="sub_category_view" >
                    <router-link
                  :to="{
                    name: 'PublicSubSUbCategory',
                    params: { slug: sub_sub_category.slug },
                  }"
                  class="sub-category-name"
                  v-for="(
                    sub_sub_category, index
                  ) in sub_category.sub_sub_category"
                  :key="index"
                  v-if="index <= 7"
                  >{{ sub_sub_category.name }}</router-link
                >

                <router-link
                  :to="{
                    name: 'PublicSubCategory',
                    params: { slug: sub_category.slug },
                  }"
                  class="c-v-all"
                  >View All
                </router-link>
                </div>
              </div>
            </div>

            <div class="row">
              <div
                class="col-lg-3 col-sm-6 col-md-4 col-xs-6 width-20"
                v-for="(product, index) in sub_category.products"
                :key="index"
                v-if="index < 10"
              >
                <div class="product-card">
                  <div class="prodict-card-body">
                    <router-link
                      :to="{ name: 'single', params: { slug: product.slug } }"
                    >
                      <img
                        v-if="product.product_image.length"
                        :src="base_url + product.product_image[0].product_image"
                      />
                    </router-link>
                    <div class="product-detail">
                      <h4>
                        <router-link
                          class="product-link"
                          :to="{
                            name: 'single',
                            params: { slug: product.slug },
                          }"
                          >{{ product.name }}</router-link
                        >
                      </h4>
                      <p class="price">
                        <span class="price-new">{{ product.price }}</span>
                        <span class="price-old" v-if="product.discount">{{
                          product.sale_price
                        }}</span>
                      </p>
                    </div>
                  </div>

                  <div class="product-card-footer">
                    <button
                      class="btn btn-primary btnQuick"
                      style="cursor: pointer"
                      @click="quick_v_product_id = product.id"
                    >
                      view
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" v-if="sub_category.id == 3">
              <div class="parallax_background">
                <div class="parallax_inside">
                  <div class="parallax_content">
                    <a
                      href="https://mohasagor.com/public/product/view/mens-full-sleeve-t-shirt-1177"
                      target="_blank"
                    >
                      <img
                        src="https://mohasagor.com/public/storage/images/static/wed-emplate.png"
                        style="max-width: 450px; margin-top: 10px"
                        alt=""
                      />
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- <infinite-loading @infinite="productsList">
        <div slot="no-more"></div>
      </infinite-loading> -->
      </div>
    </div>

    <frontend-footer></frontend-footer>
    <quick-view
      v-if="quick_v_product_id"
      v-on:clicked="closedModal($event)"
      :quick_v_p_id="quick_v_product_id"
    >
    </quick-view>
  </div>
</template>

<script>
import Vue from "vue";
 
import Loading from "vue-loading-overlay";
import "vue-loading-overlay/dist/vue-loading.css";
import carousel from "vue-owl-carousel";
Vue.use(Loading);

export default {
  name: "welcome",
  
  created(){
     this.getNewArrivalProducts();
  },
  data() {
    return {
      loading: true,
      // sub_categories: [],
      page: 1,
      offers: [],
      product_id: null,
      background_parallax:
        this.$store.state.image_base_link + "images/parallax.jpg",
      base_url: this.$store.state.image_base_link,
      isScroll: 0,
      quick_v_product_id: "",
      o_modal: false,
      new_arrival_products:{},
    };
  },
  methods: {
    getNewArrivalProducts(page=1){
      axios.get('/_public/api/new/arrival/products?page='+page)
      .then(resp=>{
        console.log(resp);
        this.new_arrival_products=resp.data.new_arrival_products;
      })
    },
    handleScrol() {
      this.isScroll = 1;
      // if(window.scrollY>400){
      //   this.$store.dispatch('sub_sub_category_product')
      // }
      console.log();
    },

    productDetals(product_id) {
      this.prdoct_modal = true;
      this.product_id = product_id;
    },
    closedModal(close) {
      this.quick_v_product_id = "";
    },
    showCategoryName(id) {

    var x = document.getElementById('subCategoryNameView'+id);
    console.log(x)
    console.log(id);
    x.classList.toggle('displayeBlok');
    
      }

   
  
  },
  components: {
    Loading,
    carousel,
  },
  mounted() {
    window.addEventListener("scroll", this.handleScrol);
    this.$store.dispatch("category");
    this.$store.dispatch("sliders");
    this.$store.dispatch("offer_banner");
    this.$store.dispatch("flash_sale_products");
   
  },

  computed: {
    category() {
      return this.$store.getters.categories;
    },
    slider_banner() {
      return this.$store.getters.slider_banner;
    },
    sliders() {
      return this.$store.getters.sliders;
    },
    getOffers() {
      return this.$store.getters.offer_banner;
    },
   

    flash_sale_products() {
      return this.$store.getters.flash_sale_products;
    },
    sub_categories() {
      return this.$store.getters.home_page_products;
    },
  },
  watch: {
    isScroll: function (value) {
      if (value == 1) {
        this.$store.dispatch("home_page_products");
      }
    },

  }
    
};

//show sub  menu in mobile menu
document.addEventListener("DOMContentLoaded", () => {
  //set a time our function. this function call after 2 sec on domloaded
  setTimeout(() => {
    //find the click element
    let sub_menu = document.getElementsByClassName("show-sub");

    for (let i = 0; i < sub_menu.length; i++) {
      //set a click event
      sub_menu[i].addEventListener("click", function () {
        let show_sub_menu = sub_menu[i].parentElement.querySelector(
          ".left-sub-menu"
        );
        //set active class
        show_sub_menu.classList.toggle("nav-active");
        sub_menu[i].classList.toggle("fa-minus");
      });
    }
  }, 2000);
});
</script>

<style scoped>

.arrival_heading{
  text-transform: uppercase;
  font-weight: 600;
}

.new_arrival_section{
  margin-top: 10px;
  margin-bottom: 100px;
}

.new_arrival_card{

    width: 180px;
    height: 180px;
    background: #F4F1F0;
    border-radius: 50%;
}

.new_arrival_card_body img{
  
    width: 130px;
    height: 130px;
    margin: 24px;
    border-radius: 50%;

}

.arrival_link{
    font-size: 14px;
    margin: 5px;
    float: left;
    margin-left: 38px;
    text-transform: uppercase;
    font-weight: 600;
    color: #000;

}

   .banner_title{
      margin-left: 3px;
      text-transform: uppercase;
      font-weight: 600;
    }


.nav-active {
  display: block !important;
}

.product-card-footer {
  padding: 0px;
}

.btnQuick:hover {
  background: #ff4d03;
}

.parallax_background {
  width: 98%;
  height: 300px;
  margin-left: 14px;
  background-image: url(https://mohasagor.com/public/storage/images/static/wed-template.jpg);
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.parallax_inside {
  position: absolute;
  width: 40%;
  height: 200px;
}

.parallax_content {
  margin: 10px;
  position: absolute;

  width: 96%;
  height: 175px;
  text-align: center;
}

.parallax_content h4 {
  margin-top: 30px;
}

.parallax_offer {
  margin-top: 15px !important;
  margin-bottom: 15px !important;
}

.service_row {
  width: 103%;
  height: 135px;
  background: #2e2e2e;
  margin-left: 0px;
  margin-top: -50px;
}

.service_container {
  float: left;
}

.service_outer {
  width: 75px;
  height: 75px;
  border-radius: 50%;
  border: 1px solid #fff;
  background: #222;
  margin: -22px 94px;
}

.service_inner {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  background: #ff4d03;
  margin: 6.5px 6px;
}

.service_icon {
  position: absolute;
  margin: 11px;
  color: #fff;
  font-size: 35px;
}

.service_outer:hover > .service_inner > .service_icon {
  -webkit-transform: scaleX(-1);
  transform: scaleX(-1);
  cursor: pointer;
  transition: 0.5s;
}

.service_description1 {
  color: #fff;
  padding: 10px;
  margin-top: 13px;
  font-size: 13px;
}

.service_description2 {
  color: #fff;
  padding: 10px;
  margin-top: 13px;
  font-size: 13px;
  margin-left: 25px;
}

.service_description3 {
  color: #fff;
  padding: 10px;
  margin-left: 45px;
  margin-top: 17px;
  font-size: 13px;
}

.service_description4 {
  color: #fff;
  padding: 10px;
  margin-left: 50px;
  margin-top: 13px;
  font-size: 13px;
}

@media screen and (max-width: 750px) {
  .parallax_inside {
    width: 60%;
  }

  .parallax_content {
    width: 91%;
  }

  .parallax_offer {
    margin-top: 15px !important;
    margin-bottom: 15px !important;
  }

  .service_row {
    width: 100%;
    height: 160px;
    background: #2e2e2e;
    margin-left: 0px;
    margin-top: -50px;
  }

  .service_optional {
    display: none;
  }

  .service_container {
    display: flex;
  }
  .service_outer {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    border: dashed 1px #fff;
    background: #222;
    margin-left: 23px;
    margin-top: 26px;
  }

  .service_inner {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    background: #fff;
    margin: 7px 6px;
  }

  .service_icon {
    position: absolute;
    margin: 7px;
    font-size: 30px;
  }

  .service_outer:hover > .service_inner > .service_icon {
    -webkit-transform: scaleX(-1);
    transform: scaleX(-1);
    cursor: pointer;
    transition: 0.5s;
  }

  .service_description1 {
    position: absolute;
    font-size: 15px !important;
    line-height: 22px !important;
    margin-left: 95px;
    padding-top: 15px;
  }

  .service_description2 {
    position: absolute;
    font-size: 15px !important;
    line-height: 22px !important;
    line-height: 22px !important;
    margin-left: 95px;
    padding-top: 27px;
  }


  
.parallax_background {

    display: none;

}

.arrow_icon{
  display: inline-block;
}

.sub_category_view{
  display: none;
  margin-top: 15px;
}


.sub-category-name {
    border-bottom: 1px solid #ff4d03;
    background: #fff;
    padding: 0px 7px;
    font-size: 13px;
    font-weight: bold;
    margin-left: 5px;
    float: left;
    margin-bottom: 10px;
    border-block-end-style: none;
}


.c-v-all {
    background: #000;
    color: #fff;
    padding: 5px 13px;
    width: 22px;
    height: 38px;
    display: inline;
    border-radius: 4px;
    transition: .5s;
}

  

}

.displayeBlok{
  display: none;
}


</style>
