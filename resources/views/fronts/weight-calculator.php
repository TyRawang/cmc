<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Weight Calculator</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
    crossorigin="anonymous" />
  <!-- <link rel="stylesheet" href="https://cargomoverscanada.com/assets/weight-calculator/weight-calculator.css"> -->
  <link rel="stylesheet" href="https://cargomoverscanada.com/assets/weight-calculator/fonts/icon-fonts/flaticon.css">
  <link rel="stylesheet" href="https://cargomoverscanada.com/assets/css/jquery-ui.min.css">
  
  <style type="text/css">
#root {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
}

#root .logo {
  text-align: center;
}

* {
margin: 0;
padding: 0;
}

html, body {
max-width: 100vw;
}

.container-fluid {
width: 100vw;
min-height: 100vh;
max-width: 100vw;
padding: 2rem 0;
}

.container {
width: 90%;
max-width: 1200px;
margin: 0 auto;
}

.row {
width: 100%;
padding: 0;
margin: 0;
}

.quote-calculation {
display: flex;
align-items: center;
justify-content: space-between;
margin-bottom: 2rem;
}

.small-column, .medium-column {
height: 50vh;
min-height: 350px;
max-height: 450px;
}

.small-column {
width: 20%;
}

.medium-column {
width: 30%;
}

.calculation-area, .items-area, .item-type-area {
border-right: 1px solid gray;
border-top: 1px solid gray;
border-bottom: 1px solid gray;
background: #eeeeee;
}

.rooms-list-area {
border-left: 1px solid gray;
border-top: 1px solid gray;
border-bottom: 1px solid gray;
background: #eeeeee;
}

.calculation-area {
background: white;
}

.item-type-area {
overflow: auto;
}

.room-list, .item-type {
list-style: none;
display: flex;
flex-direction: column;
align-items: flex-start;
justify-content: flex-start;
}

.room-list li, .item-type li {
width: 100%;
}

.room-list a, .item-type a {
display: block;
text-decoration: none;
font-size: .9rem;
font-weight: bold;
text-align: center;
padding: 1.646rem;
color: black;
border-bottom: 1px solid grey;
}

.room-list a {
border-right: 1px solid grey;
}

.room-list li:last-child a, .item-type li:last-child a{
border-bottom: none;
}

.item-type a, .item-type a:visited {
padding: .405rem;
}

.room-list a:hover, .item-type a:hover {
background-color: lightgrey;
color: white;
}

.room-list a.link-active:hover {
background-color: white;
box-shadow: -2px 3px 10px #888888;
border: none;
color: black;
}

.room-list a.link-active {
background-color: white;
box-shadow: -2px 3px 10px #888888;
border-right: none;
}

.item-type a.link-active {
background-color: #6cb738;
box-shadow: 1px 1px 5px #888888 inset;
color: white;
}

.item-type a.link-active:hover {
background: #6cb738;
box-shadow: 1px 1px 10px #888888 inset;;
}

.calculation-area, .items-area {
overflow-y: scroll;
}

.calculation-items, .moving-items {
height: 100%;
width: 100%;
display: flex;
align-items: flex-start;
align-content: flex-start;
flex-wrap: wrap;
}

.calculation-item {
display: block;
width: 46px;
height: 46px;
margin: .5rem;
border: 1px solid black;
border-radius: 5px;
background: url("https://cargomoverscanada.com/assets/weight-calculator/sprite.gif");
cursor: pointer;
}

.item-display {
display: block;
width: 46px;
height: 46px;
margin: .5rem;
border: 1px solid black;
border-radius: 5px;
background: url("https://cargomoverscanada.com/assets/weight-calculator/sprite.gif");
cursor: pointer;
}

.item-display:hover {
box-shadow: 0 0 5px 1px #67b233;
}

.qtyBadge {
padding: 2px 8px;
border-radius: 50%;
background-color: #67b233;
color: white;
margin-left: 45px;
margin-top: -65px;
display: flex;
font-size: .8rem;
}

[class^="flaticon-"]:before,
[class*=" flaticon-"]:before,
[class^="flaticon-"]:after,
[class*=" flaticon-"]:after {
font-family: Flaticon;
font-size: 2rem;
font-style: normal;
margin-left: 0;
}

.calculation-summery-row {
display: flex;
justify-content: space-between;
}

.summery-head {
width: 50%;
}

.item-detail-margin {
width: 28%;
text-align: center;
/*margin-left: 15rem;*/
}

.call-to-action {
width: 20%;
}

.summeryBtn {
padding: 10px 20px;
border: none;
background-color: #67b233;
cursor: pointer;
/*margin-top: 10px;*/
font-size: 1.1em;
color: white;
font-weight: bold;
}

.summery-container {
width: 90%;
max-width: 1100px;
padding: 5%;
margin: 0 auto;
background-color: aliceblue;
}

.summery-container h3 {
color: #607d8b;
font-size: 20px;
font-weight: bolder;
margin-bottom: 20px;
padding-top: 30px;
padding-left: 30px;
}

.summery-container > p {
width: 70%;
margin: 0 auto;
font-size: 1.5rem;
text-align: center;
}

.summery-inventory {
width: 70%;
max-width: 100%;
/*padding: 30px;*/
margin: 20px auto 0;
background-color: white;
box-shadow: 2px 2px 10px grey;
}

.moving-from-to {
display: flex;
justify-content: space-between;
padding: 0 30px 0;
margin-bottom: 20px;
}

.map-area {
background: url("https://cargomoverscanada.com/assets/weight-calculator/map.jpeg") center no-repeat;
background-size: cover;
width: 49%;
height: 150px;
}

.address-area {
width: 49%;
}

.total-summery-line p {
border-bottom: 2px solid black;
padding: 5px 0;
margin: 0 30px;
}

.summery-room-name {
text-align: center;
font-size: 20px;
padding: 10px 0;
background: #fafafa;
color: #607d8b;
border-top: 1px solid grey;
border-bottom: 2px solid grey;
}

.summery-room-items-wrapper {
padding: 10px 30px;
}

.summery-room-items-wrapper .item-lines {
padding: 5px 0;
border-bottom: 1px solid #dddddd;
display: flex;
justify-content: space-between;
}

.summery-item-icon {
width: 30%;
display: flex;
align-items: center;
justify-content: center;
}

.summery-icon-display{
width: 46px;
height: 46px;
border: 1px solid black;
border-radius: 5px;
background: url("https://cargomoverscanada.com/assets/weight-calculator/sprite.gif") no-repeat;
}

.summery-item-detail {
width: 68%;
}

.summery-item-detail h3 {
padding: 0;
}

.summery-item-detail-specifics {
display: flex;
justify-content: space-between;
}

.summery-item-detail-specifics > div {
width: 49%;
}

.summery-item-detail-specifics h4 {
color: #67b233;
}

.summery-item-detail-specifics span {
color: black;
font-weight: lighter;
margin-top: 0;
}

.faq-terms {
padding: 30px;
}

.faq-terms ul {
padding: 30px;
}

.faq-terms a {
text-decoration: none;
}

.icon-1 {background-position: 0 -0px}
.icon-2 {background-position: 0 -46px}
.icon-3 {background-position: 0 -92px}
.icon-4 {background-position: 0 -138px}
.icon-5 {background-position: 0 -184px}
.icon-6 {background-position: 0 -230px}
.icon-7 {background-position: 0 -276px}
.icon-8 {background-position: 0 -322px}
.icon-9 {background-position: 0 -368px}
.icon-10 {background-position: 0 -414px}
.icon-11 {background-position: 0 -460px}
.icon-12 {background-position: 0 -506px}
.icon-13 {background-position: 0 -552px}
.icon-14 {background-position: 0 -598px}
.icon-15 {background-position: 0 -644px}
.icon-16 {background-position: 0 -690px}
.icon-17 {background-position: 0 -736px}
.icon-18 {background-position: 0 -782px}
.icon-19 {background-position: 0 -828px}
.icon-20 {background-position: 0 -874px}
.icon-21 {background-position: 0 -920px}
.icon-22 {background-position: 0 -966px}
.icon-23 {background-position: 0 -1012px}
.icon-24 {background-position: 0 -1058px}
.icon-59 {background-position: 0 -1104px}
.icon-60 {background-position: 0 -1150px}
.icon-61 {background-position: 0 -1196px}
.icon-62 {background-position: 0 -1242px}
.icon-63 {background-position: 0 -1288px}
.icon-64 {background-position: 0 -1334px}
.icon-65 {background-position: 0 -1380px}
.icon-44 {background-position: 0 -1426px}
.icon-45 {background-position: 0 -1472px}
.icon-46 {background-position: 0 -1518px}
.icon-47 {background-position: 0 -1564px}
.icon-48 {background-position: 0 -1610px}
.icon-49 {background-position: 0 -1656px}
.icon-50 {background-position: 0 -1702px}
.icon-51 {background-position: 0 -1748px}
.icon-52 {background-position: 0 -1794px}
.icon-53 {background-position: 0 -1840px}
.icon-54 {background-position: 0 -1886px}
.icon-55 {background-position: 0 -1932px}
.icon-56 {background-position: 0 -1978px}
.icon-57 {background-position: 0 -2024px}
.icon-58 {background-position: 0 -2070px}
.icon-25 {background-position: 0 -2116px}
.icon-26 {background-position: 0 -2162px}
.icon-27 {background-position: 0 -2208px}
.icon-28 {background-position: 0 -2254px}
.icon-29 {background-position: 0 -2300px}
.icon-30 {background-position: 0 -2346px}
.icon-31 {background-position: 0 -2392px}
.icon-32 {background-position: 0 -2438px}
.icon-33 {background-position: 0 -2484px}
.icon-34 {background-position: 0 -2530px}
.icon-36 {background-position: 0 -2576px}
.icon-38 {background-position: 0 -2622px}
.icon-39 {background-position: 0 -2668px}
.icon-40 {background-position: 0 -2714px}
.icon-41 {background-position: 0 -2760px}
.icon-42 {background-position: 0 -2806px}
.icon-43 {background-position: 0 -2852px}
.icon-78 {background-position: 0 -2898px}
.icon-79 {background-position: 0 -2944px}
.icon-80 {background-position: 0 -2990px}
.icon-81 {background-position: 0 -3036px}
.icon-82 {background-position: 0 -3082px}
.icon-83 {background-position: 0 -3128px}
.icon-84 {background-position: 0 -3174px}
.icon-85 {background-position: 0 -3220px}
.icon-86 {background-position: 0 -3266px}
.icon-87 {background-position: 0 -3312px}
.icon-146 {background-position: 0 -3358px}
.icon-147 {background-position: 0 -3404px}
.icon-148 {background-position: 0 -3450px}
.icon-149 {background-position: 0 -3496px}
.icon-151 {background-position: 0 -3542px}
.icon-152 {background-position: 0 -3588px}
.icon-153 {background-position: 0 -3634px}
.icon-155 {background-position: 0 -3680px}
.icon-156 {background-position: 0 -3726px}
.icon-157 {background-position: 0 -3772px}
.icon-158 {background-position: 0 -3818px}
.icon-159 {background-position: 0 -3864px}
.icon-160 {background-position: 0 -3910px}
.icon-161 {background-position: 0 -3956px}
.icon-162 {background-position: 0 -4002px}
.icon-163 {background-position: 0 -4048px}
.icon-164 {background-position: 0 -4094px}
.icon-165 {background-position: 0 -4140px}
.icon-166 {background-position: 0 -4186px}
.icon-167 {background-position: 0 -4232px}
.icon-168 {background-position: 0 -4278px}
.icon-169 {background-position: 0 -4324px}
.icon-170 {background-position: 0 -4370px}
.icon-171 {background-position: 0 -4416px}
.icon-172 {background-position: 0 -4462px}
.icon-173 {background-position: 0 -4508px}
.icon-88 {background-position: 0 -4554px}
.icon-89 {background-position: 0 -4600px}
.icon-90 {background-position: 0 -4646px}
.icon-91 {background-position: 0 -4692px}
.icon-92 {background-position: 0 -4738px}
.icon-93 {background-position: 0 -4784px}
.icon-94 {background-position: 0 -4830px}
.icon-95 {background-position: 0 -4876px}
.icon-96 {background-position: 0 -4922px}
.icon-97 {background-position: 0 -4968px}
.icon-98 {background-position: 0 -5014px}
.icon-99 {background-position: 0 -5060px}
.icon-100 {background-position: 0 -5106px}
.icon-101 {background-position: 0 -5152px}
.icon-102 {background-position: 0 -5198px}
.icon-103 {background-position: 0 -5244px}
.icon-104 {background-position: 0 -5290px}
.icon-105 {background-position: 0 -5336px}
.icon-106 {background-position: 0 -5382px}
.icon-107 {background-position: 0 -5428px}
.icon-108 {background-position: 0 -5474px}
.icon-109 {background-position: 0 -5520px}
.icon-110 {background-position: 0 -5566px}
.icon-111 {background-position: 0 -5612px}
.icon-112 {background-position: 0 -5658px}
.icon-113 {background-position: 0 -5704px}
.icon-114 {background-position: 0 -5750px}
.icon-115 {background-position: 0 -5796px}
.icon-116 {background-position: 0 -5842px}
.icon-117 {background-position: 0 -5888px}
.icon-118 {background-position: 0 -5934px}
.icon-119 {background-position: 0 -5980px}
.icon-120 {background-position: 0 -6026px}
.icon-121 {background-position: 0 -6072px}
.icon-122 {background-position: 0 -6118px}
.icon-123 {background-position: 0 -6164px}
.icon-124 {background-position: 0 -6210px}
.icon-125 {background-position: 0 -6256px}
.icon-126 {background-position: 0 -6302px}
.icon-127 {background-position: 0 -6348px}
.icon-128 {background-position: 0 -6394px}
.icon-129 {background-position: 0 -6440px}
.icon-130 {background-position: 0 -6486px}
.icon-131 {background-position: 0 -6532px}
.icon-132 {background-position: 0 -6578px}
.icon-133 {background-position: 0 -6624px}
.icon-134 {background-position: 0 -6670px}
.icon-135 {background-position: 0 -6716px}
.icon-136 {background-position: 0 -6762px}
.icon-137 {background-position: 0 -6808px}
.icon-138 {background-position: 0 -6854px}
.icon-139 {background-position: 0 -6900px}
.icon-140 {background-position: 0 -6946px}
.icon-141 {background-position: 0 -6992px}
.icon-142 {background-position: 0 -7038px}
.icon-143 {background-position: 0 -7084px}
.icon-144 {background-position: 0 -7130px}
.icon-145 {background-position: 0 -7176px}
.icon-184 {background-position: 0 -7222px}
.icon-185 {background-position: 0 -7268px}
.icon-186 {background-position: 0 -7314px}
.icon-187 {background-position: 0 -7360px}
.icon-188 {background-position: 0 -7406px}
.icon-189 {background-position: 0 -7452px}
.icon-190 {background-position: 0 -7498px}
.icon-191 {background-position: 0 -7544px}
.icon-192 {background-position: 0 -7590px}
.icon-193 {background-position: 0 -7636px}
.icon-194 {background-position: 0 -7682px}
.icon-195 {background-position: 0 -7728px}
.icon-196 {background-position: 0 -7774px}
.icon-197 {background-position: 0 -7820px}
.icon-198 {background-position: 0 -7866px}
.icon-199 {background-position: 0 -7912px}
.icon-200 {background-position: 0 -7958px}
.icon-201 {background-position: 0 -8004px}
.icon-174 {background-position: 0 -8050px}
.icon-175 {background-position: 0 -8096px}
.icon-176 {background-position: 0 -8142px}
.icon-177 {background-position: 0 -8188px}
.icon-178 {background-position: 0 -8234px}
.icon-179 {background-position: 0 -8280px}
.icon-180 {background-position: 0 -8326px}
.icon-181 {background-position: 0 -8372px}
.icon-182 {background-position: 0 -8418px}
.icon-183 {background-position: 0 -8464px}
.icon-66 {background-position: 0 -8510px}
.icon-67 {background-position: 0 -8556px}
.icon-68 {background-position: 0 -8602px}
.icon-69 {background-position: 0 -8648px}
.icon-70 {background-position: 0 -8694px}
.icon-71 {background-position: 0 -8740px}
.icon-72 {background-position: 0 -8786px}
.icon-73 {background-position: 0 -8832px}
.icon-74 {background-position: 0 -8878px}
.icon-75 {background-position: 0 -8924px}
.icon-76 {background-position: 0 -8970px}
.icon-77 {background-position: 0 -9016px}
.icon-202 {background-position: 0 -9062px}
.icon-203 {background-position: 0 -9108px}
.icon-204 {background-position: 0 -9154px}
.icon-205 {background-position: 0 -9200px}
.icon-206 {background-position: 0 -9246px}
.icon-207 {background-position: 0 -9292px}
.icon-208 {background-position: 0 -9338px}
.icon-209 {background-position: 0 -9384px}
.icon-210 {background-position: 0 -9430px}
.icon-211 {background-position: 0 -9476px}
.icon-212 {background-position: 0 -9522px}
.icon-213 {background-position: 0 -9568px}
.icon-214 {background-position: 0 -9614px}
.icon-215 {background-position: 0 -9660px}
</style>
  <!-- End of STYLE 
==============================================================================================================
-->


</head>

<body>
  <div id="root">
    <weight-calculator></weight-calculator>
  </div>


  <!-- production version, optimized for size and speed -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/vue"></script> -->

  <!-- development version, includes helpful console warnings -->
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.8.4/Sortable.min.js"></script>
  <!-- CDNJS :: Vue.Draggable (https://cdnjs.com/) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Vue.Draggable/2.20.0/vuedraggable.umd.min.js"></script>

  <script>
    Vue.component('WeightCalculator', {
      template: `
            <div class="container-fluid">
              <div class="container" v-show="displaySummery === false">
                <div class="row quote-calculation">
                  <div class="small-column rooms-list-area">
                    <ul class="room-list">
                      <li v-for="(room, index) in rooms" :key="index">
                        <a href="#" @click="activateRoom(room)" :class="activeRoom === room ?'link-active':''"> {{ room }} <span v-show="totalItemsInRoom(room) > 0">({{ totalItemsInRoom(room) }})</span></a>
                      </li>
                    </ul>
                  </div>

                  <div class="medium-column calculation-area">
                    <h3>Calculation Area</h3>
                    <draggable
                      class="dragArea calculation-items"
                      :list="calculationList"
                      group="movable-items"
                      @change="cloned"
                    >
                      <div v-for="(element, index) in itemsInActiveRoom" :key="index">
                        <!--{{ element.item.name }}-->
                        <span class="calculation-item" :class="element.item.iconClass" @mouseover="showItemDetail(element.item)" @mouseleave="hideDetail" @click="removeFromCalculationList(element)"></span>
                        <span v-show="element.qty > 1" class="qtyBadge">{{ element.qty }}</span>
                      </div>
                    </draggable>
                  </div>

                  <div class="medium-column items-area">
                    <h3>Moving Items Area</h3>
                    <draggable
                      class="dragArea moving-items"
                      :list="movingList"
                      :group="{ name: 'movable-items', pull: 'clone', put: false }"
                      @change="removed"
                    >
                      <div
                        class="moving-item"
                        v-for="(element, index) in movingList"
                        :key="index"
                      >
                        <div v-show="element.itemType === activeItemCategory">
                          <!--{{ element.name }}-->
                          <span class="item-display" :class="element.iconClass" @mouseover="showItemDetail(element)" @mouseleave="hideDetail" @click="addToCalculationList(element)"></span>
                        </div>

                      </div>
                    </draggable>
                  </div>

                  <div class="small-column item-type-area">
                    <ul class="item-type">
                      <li v-for="(category, index) in itemCategories" :key="index">
                        <a href="#" @click="activateCategory(category)"
                          :class="activeItemCategory === category ? 'link-active':''">{{ category }}</a>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="row calculation-summery-row">
                  <div class="summery-head">Total Items: <strong>{{ calculationList.length }}</strong>; Total Weight: <strong>{{ getTotalCalculatedWeight }}</strong> lbs; Total Volume: <strong>{{ getTotalVolume }}</strong> cu. ft.</div>

                  <div class="item-detail-margin"><span>{{ itemDetail.name }}</span> <span class="item-detail-visible" v-show="itemDetail.weight">({{itemDetail.weight}} lbs)</span></div>

                  <div class="call-to-action"><button class="summeryBtn" @click.prevent="showCalculationSummery">Inventory Summery</button></div>
                </div>
              </div>

              <div class="container summery-container" v-show="displaySummery === true">
                <p>Thank you</p>
                <p>Your inventory list is here with the estimated weight. If you are looking for Moving, Packing and/or Storage services please contact us <b>info@cargomoverscanada.com</b></p>
                <div class="summery-inventory">
                  <div class="row">
                    <h3>MOVE DETAILS</h3>
                    <div class="moving-from-to">
                      <div class="map-area"></div>
                      <div class="address-area">
                        <p><strong>Moving From:</strong> ________________ </p>
                        <p><strong>Moving To:</strong> ________________ </p>
                        <p><strong>Approx. Distance:</strong> ________________</p>
                        <p><strong>Move Date:</strong> ________________</p>
                      </div>
                    </div>
                  </div>

                  <div class="row total-summery">
                    <h3>SUMMARY</h3>
                    <div class="total-summery-line">
                      <p><strong>Total Items: </strong> {{calculationList.length}}</p>
                      <p><strong>Total Weight: </strong>{{ getTotalCalculatedWeight }} lbs</p>
                      <p><strong>Total Volume: </strong>{{ getTotalVolume }} cu. ft.</p>
                    </div>
                  </div>

                  <div class="row">
                    <h3>ROOMS</h3>
                    <div class="row" v-for="(room, index) in rooms" :key="index">
                      <div v-show="allItemsCalculation[room.trim().replace(' ', '_').toLowerCase()].length > 0">
                        <div class="summery-room-name">{{room}}</div>
                        <div class="summery-room-items-wrapper">
                          <div class="row item-lines" v-for="(item, index) in allItemsCalculation[room.trim().replace(' ', '_').toLowerCase()]" :key="index">
                            <div class="summery-item-icon">
                              <div class="summery-icon-display" :class="item.item.iconClass"></div>
                            </div>
                            <div class="summery-item-detail">
                              <div>
                                <h3>{{item.qty}} x {{item.item.name}}</h3>
                                <div class="summery-item-detail-specifics">
                                  <div><h4>Weight: <span>{{item.item.weight}} lbs each</span></h4><span>(Total Weight: {{item.qty * item.item.weight}} lbs)</span></div>
                                  <div><h4>Volume: <span>{{item.item.volume}} sqft each</span></h4><span>(Total Volume:{{item.qty * item.item.volume}} sqft)</span></div>
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="faq-terms">
                        <p>In the meantime, take a look at our blogs <b>cargomoverscanada.com/blogs</b>. Enjoy!</p>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            `,
      display: "Clone",
      order: 2,

      data() {
        return {
          movingList: [
            {name: 'Mirror', iconClass: 'icon-1', weight: 35, volume: 5, itemType: 'Accessories'},
            {name: 'Tea Cart', iconClass: 'icon-2', weight: 70, volume: 10, itemType: 'Accessories'},
            {name: 'Serving Cart', iconClass: 'icon-3', weight: 105, volume: 15, itemType: 'Accessories'},
            {name: 'Fireplace Equipment', iconClass: 'icon-4', weight: 35, volume: 5, itemType: 'Accessories'},
            {name: 'Magazine Rack', iconClass: 'icon-5', weight: 14, volume: 2, itemType: 'Accessories'},
            {name: 'TV Stand', iconClass: 'icon-6', weight: 21, volume: 3, itemType: 'Accessories'},
            {name: 'Picture 2x2', iconClass: 'icon-7', weight: 10, volume: 5, itemType: 'Accessories'},
            {name: 'Picture 3x3', iconClass: 'icon-8', weight: 15, volume: 10, itemType: 'Accessories'},
            {name: 'Picture 4x4', iconClass: 'icon-9', weight: 20, volume: 15, itemType: 'Accessories'},
            {name: 'Clothes Basket', iconClass: 'icon-10', weight: 35, volume: 5, itemType: 'Accessories'},
            {name: 'Clothes Hamper', iconClass: 'icon-11', weight: 35, volume: 5, itemType: 'Accessories'},
            {name: 'Ferns/Plant Stand', iconClass: 'icon-12', weight: 14, volume: 2, itemType: 'Accessories'},
            {name: 'Power Tool Hand', iconClass: 'icon-13', weight: 21, volume: 3, itemType: 'Accessories'},
            {name: 'Power Tool Stand', iconClass: 'icon-14', weight: 105, volume: 15, itemType: 'Accessories'},
            {name: 'Suitcase', iconClass: 'icon-15', weight: 35, volume: 5, itemType: 'Accessories'},
            {name: 'Tackle Box', iconClass: 'icon-16', weight: 7, volume: 1, itemType: 'Accessories'},
            {name: 'Waste Paper Basket', iconClass: 'icon-17', weight: 14, volume: 2, itemType: 'Accessories'},
            {name: 'Wheel Chair', iconClass: 'icon-18', weight: 105, volume: 15, itemType: 'Accessories'},
            {name: 'Wheel Chair Scooter', iconClass: 'icon-19', weight: 315, volume: 45, itemType: 'Accessories'},
            {name: 'Ironing Table', iconClass: 'icon-20', weight: 35, volume: 5, itemType: 'Accessories'},
            {name: 'Bathinette', iconClass: 'icon-21', weight: 35, volume: 5, itemType: 'Accessories'},
            {name: 'Ladder 6 8 Steps', iconClass: 'icon-22', weight: 17, volume: 3, itemType: 'Accessories'},
            {name: 'Ladder Extension', iconClass: 'icon-23', weight: 56, volume: 8, itemType: 'Accessories'},
            {name: 'Umbrella', iconClass: 'icon-24', weight: 35, volume: 5, itemType: 'Accessories'},
            {name: 'Box, Dish Pack', iconClass: 'icon-59', weight: 42, volume: 6, itemType: 'Boxes'},
            {name: 'Box, Large', iconClass: 'icon-60', weight: 31, volume: 4, itemType: 'Boxes'},
            {name: 'Box, Medium', iconClass: 'icon-61', weight: 25, volume: 3, itemType: 'Boxes'},
            {name: 'Box, Small', iconClass: 'icon-62', weight: 20, volume: 1, itemType: 'Boxes'},
            {name: 'Box, Book', iconClass: 'icon-63', weight: 30, volume: 1, itemType: 'Boxes'},
            {name: 'Box, Extra Large', iconClass: 'icon-64', weight: 35, volume: 6, itemType: 'Boxes'},
            {name: 'Box, Wardrobe', iconClass: 'icon-65', weight: 80, volume: 15, itemType: 'Boxes'},
            {name: 'Bed, Bunk', iconClass: 'icon-44', weight: 490, volume: 70, itemType: 'Beds'},
            {name: 'Bed, King', iconClass: 'icon-45', weight: 490, volume: 70, itemType: 'Beds'},
            {name: 'Bed, Queen', iconClass: 'icon-46', weight: 455, volume: 65, itemType: 'Beds'},
            {name: 'Bed, Rollaway', iconClass: 'icon-47', weight: 140, volume: 20, itemType: 'Beds'},
            {name: 'Bed, Single/Hollywood', iconClass: 'icon-48', weight: 280, volume: 40, itemType: 'Beds'},
            {name: 'Bed, Standard/Double', iconClass: 'icon-49', weight: 420, volume: 60, itemType: 'Beds'},
            {name: 'Bed, Waterbed Base', iconClass: 'icon-50', weight: 70, volume: 10, itemType: 'Beds'},
            {name: 'Bed, Full Size', iconClass: 'icon-51', weight: 420, volume: 60, itemType: 'Beds'},
            {name: 'Bed, King Mattress', iconClass: 'icon-52', weight: 250, volume: 70, itemType: 'Beds'},
            {name: 'Bed, Queen Mattress', iconClass: 'icon-53', weight: 200, volume: 65, itemType: 'Beds'},
            {name: 'Bed, Single', iconClass: 'icon-54', weight: 100, volume: 40, itemType: 'Beds'},
            {name: 'Bed, Full Size', iconClass: 'icon-55', weight: 150, volume: 50, itemType: 'Beds'},
            {name: 'Bed, Day Bed', iconClass: 'icon-56', weight: 210, volume: 30, itemType: 'Beds'},
            {name: 'Bed, Folding Cot', iconClass: 'icon-57', weight: 70, volume: 10, itemType: 'Beds'},
            {name: 'Bed, Youth', iconClass: 'icon-58', weight: 210, volume: 30, itemType: 'Beds'},
            {name: 'Microwave Oven', iconClass: 'icon-25', weight: 70, volume: 10, itemType: 'Appliances'},
            {name: 'Refrigerator', iconClass: 'icon-26', weight: 210, volume: 10, itemType: 'Appliances'},
            {name: 'Dehumidifier', iconClass: 'icon-27', weight: 70, volume: 10, itemType: 'Appliances'},
            {name: 'Dishwasher', iconClass: 'icon-28', weight: 140, volume: 20, itemType: 'Appliances'},
            {name: 'Dryer', iconClass: 'icon-29', weight: 175, volume: 25, itemType: 'Appliances'},
            {name: 'Fan', iconClass: 'icon-30', weight: 35, volume: 5, itemType: 'Appliances'},
            {name: 'Freezer, 10 or less', iconClass: 'icon-31', weight: 210, volume: 30, itemType: 'Appliances'},
            {name: 'Freezer, 11 or 15', iconClass: 'icon-32', weight: 315, volume: 45, itemType: 'Appliances'},
            {name: 'Freezer, 16 or higher', iconClass: 'icon-33', weight: 420, volume: 60, itemType: 'Appliances'},
            {name: 'Gas/Electric Heater', iconClass: 'icon-34', weight: 35, volume: 5, itemType: 'Appliances'},
            {name: 'Range 30/', iconClass: 'icon-36', weight: 105, volume: 15, itemType: 'Appliances'},
            {name: 'Refrigerator (CuCp) 6cu. ft. or less', iconClass: 'icon-38', weight: 210, volume: 30, itemType: 'Appliances'},
            {name: 'Refrigerator (CuCp) 7 or 10 cu. ft. ', iconClass: 'icon-39', weight: 315, volume: 45, itemType: 'Appliances'},
            {name: 'Trash Compactor', iconClass: 'icon-40', weight: 105, volume: 15, itemType: 'Appliances'},
            {name: 'Vacuum Cleaner', iconClass: 'icon-41', weight: 35, volume: 5, itemType: 'Appliances'},
            {name: 'Washing Machine', iconClass: 'icon-42', weight: 175, volume: 25, itemType: 'Appliances'},
            {name: 'Stackable Washer/Dryer', iconClass: 'icon-43', weight: 420, volume: 60, itemType: 'Appliances'},
            {name: 'Computer System', iconClass: 'icon-78', weight: 105, volume: 15, itemType: 'Electronics'},
            {name: 'Lamp', iconClass: 'icon-79', weight: 21, volume: 3, itemType: 'Electronics'},
            {name: 'Stereo Component', iconClass: 'icon-80', weight: 35, volume: 5, itemType: 'Electronics'},
            {name: 'Table Radio', iconClass: 'icon-81', weight: 14, volume: 2, itemType: 'Electronics'},
            {name: 'TV 36"', iconClass: 'icon-82', weight: 40, volume: 25, itemType: 'Electronics'},
            {name: 'TV 40"', iconClass: 'icon-83', weight: 50, volume: 30, itemType: 'Electronics'},
            {name: 'TV 60"', iconClass: 'icon-84', weight: 60, volume: 35, itemType: 'Electronics'},
            {name: 'AirConditioner', iconClass: 'icon-85', weight: 120, volume: 20, itemType: 'Electronics'},
            {name: 'Electronic Piano/Keyboard', iconClass: 'icon-86', weight: 100, volume: 14, itemType: 'Electronics'},
            {name: 'Copy Machine', iconClass: 'icon-87', weight: 140, volume: 20, itemType: 'Electronics'},
            {name: 'Patio Chair', iconClass: 'icon-146', weight: 50, volume: 15, itemType: 'Outdoor'},
            {name: 'Harvest Bench', iconClass: 'icon-147', weight: 70, volume: 10, itemType: 'Outdoor'},
            {name: 'Snow Blower', iconClass: 'icon-148', weight: 200, volume: 28, itemType: 'Outdoor'},
            {name: 'Snow Blower Ride', iconClass: 'icon-149', weight: 400, volume: 57, itemType: 'Outdoor'},
            {name: 'Tire with Rim', iconClass: 'icon-151', weight: 35, volume: 5, itemType: 'Outdoor'},
            {name: 'Trash Can', iconClass: 'icon-152', weight: 49, volume: 7, itemType: 'Outdoor'},
            {name: 'Work Bench', iconClass: 'icon-153', weight: 140, volume: 20, itemType: 'Outdoor'},
            {name: 'Table Saw', iconClass: 'icon-155', weight: 140, volume: 20, itemType: 'Outdoor'},
            {name: 'BarBQ Grill Large', iconClass: 'icon-156', weight: 140, volume: 20, itemType: 'Outdoor'},
            {name: 'BarBQ Grill Medium', iconClass: 'icon-157', weight: 105, volume: 15, itemType: 'Outdoor'},
            {name: 'BarBQ Grill Small', iconClass: 'icon-158', weight: 14, volume: 2, itemType: 'Outdoor'},
            {name: 'Garden Hose and Tools', iconClass: 'icon-159', weight: 70, volume: 10, itemType: 'Outdoor'},
            {name: 'Glider or Settee', iconClass: 'icon-160', weight: 140, volume: 20, itemType: 'Outdoor'},
            {name: 'Lawn Mover, Hand', iconClass: 'icon-161', weight: 35, volume: 5, itemType: 'Outdoor'},
            {name: 'Lawn Mover, Power', iconClass: 'icon-162', weight: 105, volume: 15, itemType: 'Outdoor'},
            {name: 'Lawn Mover, Riding(HP)', iconClass: 'icon-163', weight: 280, volume: 40, itemType: 'Outdoor'},
            {name: 'Lawn Roller', iconClass: 'icon-164', weight: 105, volume: 15, itemType: 'Outdoor'},
            {name: 'Leaf Sweeper', iconClass: 'icon-165', weight: 35, volume: 5, itemType: 'Outdoor'},
            {name: 'Outdoor Dry Racks', iconClass: 'icon-166', weight: 35, volume: 5, itemType: 'Outdoor'},
            {name: 'Outdoor Swings', iconClass: 'icon-167', weight: 210, volume: 30, itemType: 'Outdoor'},
            {name: 'Picnic Bench', iconClass: 'icon-168', weight: 35, volume: 5, itemType: 'Outdoor'},
            {name: 'Picnic Table', iconClass: 'icon-169', weight: 140, volume: 20, itemType: 'Outdoor'},
            {name: 'Sand Box', iconClass: 'icon-170', weight: 70, volume: 10, itemType: 'Outdoor'},
            {name: 'Spreader', iconClass: 'icon-171', weight: 14, volume: 2, itemType: 'Outdoor'},
            {name: 'Wheelbarrow', iconClass: 'icon-172', weight: 56, volume: 8, itemType: 'Outdoor'},
            {name: 'Patio Table', iconClass: 'icon-173', weight: 100, volume: 50, itemType: 'Outdoor'},
            {name: 'Armoire, Lrg', iconClass: 'icon-88', weight: 245, volume: 35, itemType: 'Home Storage Units'},
            {name: 'Armoire, Sm', iconClass: 'icon-89', weight: 175, volume: 25, itemType: 'Home Storage Units'},
            {name: 'Bookshelves Section', iconClass: 'icon-90', weight: 35, volume: 5, itemType: 'Home Storage Units'},
            {name: 'Chest, Rocker', iconClass: 'icon-91', weight: 84, volume: 12, itemType: 'Home Storage Units'},
            {name: 'Dresser /Vanity Bch', iconClass: 'icon-92', weight: 21, volume: 3, itemType: 'Home Storage Units'},
            {name: 'Dresser Double', iconClass: 'icon-93', weight: 280, volume: 40, itemType: 'Home Storage Units'},
            {name: 'Dresser Single', iconClass: 'icon-94', weight: 210, volume: 30, itemType: 'Home Storage Units'},
            {name: 'Dresser Triple', iconClass: 'icon-95', weight: 350, volume: 50, itemType: 'Home Storage Units'},
            {name: 'Wardrobe, Large', iconClass: 'icon-96', weight: 280, volume: 40, itemType: 'Home Storage Units'},
            {name: 'Wardrobe, Small', iconClass: 'icon-97', weight: 140, volume: 20, itemType: 'Home Storage Units'},
            {name: 'Base Buffet', iconClass: 'icon-98', weight: 210, volume: 30, itemType: 'Home Storage Units'},
            {name: 'Cabinet China', iconClass: 'icon-99', weight: 175, volume: 25, itemType: 'Home Storage Units'},
            {name: 'Corner Cabinet', iconClass: 'icon-100', weight: 140, volume: 20, itemType: 'Home Storage Units'},
            {name: 'Server', iconClass: 'icon-101', weight: 105, volume: 15, itemType: 'Home Storage Units'},
            {name: 'Top Hutch', iconClass: 'icon-102', weight: 175, volume: 25, itemType: 'Home Storage Units'},
            {name: 'Credenza', iconClass: 'icon-103', weight: 280, volume: 40, itemType: 'Home Storage Units'},
            {name: 'Kitchen Cabinet', iconClass: 'icon-104', weight: 210, volume: 30, itemType: 'Home Storage Units'},
            {name: 'Utility Cabinet', iconClass: 'icon-105', weight: 70, volume: 10, itemType: 'Home Storage Units'},
            {name: 'Book Case', iconClass: 'icon-106', weight: 140, volume: 20, itemType: 'Home Storage Units'},
            {name: 'Ceder Chest', iconClass: 'icon-107', weight: 105, volume: 15, itemType: 'Home Storage Units'},
            {name: 'Curio Cabinet', iconClass: 'icon-108', weight: 70, volume: 10, itemType: 'Home Storage Units'},
            {name: 'Entertainment Center', iconClass: 'icon-109', weight: 175, volume: 25, itemType: 'Home Storage Units'},
            {name: 'Hall Tree, Large', iconClass: 'icon-110', weight: 84, volume: 12, itemType: 'Home Storage Units'},
            {name: 'Hall Tree, Rack', iconClass: 'icon-111', weight: 14, volume: 2, itemType: 'Home Storage Units'},
            {name: 'Music Cabinet', iconClass: 'icon-112', weight: 70, volume: 10, itemType: 'Home Storage Units'},
            {name: 'Portable Bar', iconClass: 'icon-113', weight: 105, volume: 15, itemType: 'Home Storage Units'},
            {name: 'Sectional BookShelf', iconClass: 'icon-114', weight: 35, volume: 5, itemType: 'Home Storage Units'},
            {name: 'SM Winthrop Desk', iconClass: 'icon-115', weight: 154, volume: 22, itemType: 'Home Storage Units'},
            {name: 'Stereo Console', iconClass: 'icon-116', weight: 56, volume: 8, itemType: 'Home Storage Units'},
            {name: 'Trunk', iconClass: 'icon-117', weight: 35, volume: 5, itemType: 'Home Storage Units'},
            {name: 'Unit, Wall Sm', iconClass: 'icon-118', weight: 280, volume: 40, itemType: 'Home Storage Units'},
            {name: 'Unit, Wall Sm', iconClass: 'icon-119', weight: 175, volume: 25, itemType: 'Home Storage Units'},
            {name: 'Bar', iconClass: 'icon-120', weight: 140, volume: 20, itemType: 'Home Storage Units'},
            {name: 'Small Book Case', iconClass: 'icon-121', weight: 70, volume: 10, itemType: 'Home Storage Units'},
            {name: 'Medium Book Case', iconClass: 'icon-122', weight: 105, volume: 15, itemType: 'Home Storage Units'},
            {name: 'Cabinet (File)', iconClass: 'icon-124', weight: 140, volume: 10, itemType: 'Miscellaneous'},
            {name: 'Filing Cabinet 2 doors', iconClass: 'icon-123', weight: 70, volume: 10, itemType: 'Miscellaneous'},
            {name: 'Filing Cabinet 4 doors', iconClass: 'icon-124', weight: 140, volume: 20, itemType: 'Miscellaneous'},
            {name: 'Filing Cabinet Cardboard', iconClass: 'icon-125', weight: 21, volume: 3, itemType: 'Miscellaneous'},
            {name: 'Footlockers', iconClass: 'icon-126', weight: 35, volume: 5, itemType: 'Miscellaneous'},
            {name: 'Metal Shelves', iconClass: 'icon-127', weight: 35, volume: 5, itemType: 'Miscellaneous'},
            {name: 'Gun Safe, Small', iconClass: 'icon-131', weight: 300, volume: 10, itemType: 'Miscellaneous'},
            {name: 'Gun Safe, Medium', iconClass: 'icon-131', weight: 600, volume: 15, itemType: 'Miscellaneous'},
            {name: 'Gun Safe, Large', iconClass: 'icon-131', weight: 1200, volume: 20, itemType: 'Miscellaneous'},
            {name: 'Tool Chest Large', iconClass: 'icon-128', weight: 105, volume: 15, itemType: 'Miscellaneous'},
            {name: 'Tool Chest Medium', iconClass: 'icon-129', weight: 70, volume: 10, itemType: 'Miscellaneous'},
            {name: 'Filing Cabinet 5 doors', iconClass: 'icon-130', weight: 175, volume: 25, itemType: 'Miscellaneous'},
            {name: 'Chest', iconClass: 'icon-131', weight: 84, volume: 12, itemType: 'Miscellaneous'},
            {name: 'Toy Chest', iconClass: 'icon-132', weight: 35, volume: 5, itemType: 'Miscellaneous'},
            {name: 'Grandfather Clock', iconClass: 'icon-133', weight: 140, volume: 20, itemType: 'Miscellaneous'},
            {name: 'Baby Carriage', iconClass: 'icon-134', weight: 28, volume: 4, itemType: 'Miscellaneous'},
            {name: 'Child\'s Wagon', iconClass: 'icon-135', weight: 35, volume: 5, itemType: 'Miscellaneous'},
            {name: 'Child\'s Tricycle', iconClass: 'icon-136', weight: 14, volume: 2, itemType: 'Miscellaneous'},
            {name: 'Baby Crib', iconClass: 'icon-137', weight: 70, volume: 10, itemType: 'Miscellaneous'},
            {name: 'Play pen', iconClass: 'icon-138', weight: 70, volume: 10, itemType: 'Miscellaneous'},
            {name: 'Outdoor Child\'s Gym', iconClass: 'icon-139', weight: 140, volume: 20, itemType: 'Miscellaneous'},
            {name: 'Outdoor Child\'s Slide', iconClass: 'icon-140', weight: 70, volume: 10, itemType: 'Miscellaneous'},
            {name: 'Piano, Baby Grand', iconClass: 'icon-141', weight: 800, volume: 70, itemType: 'Miscellaneous'},
            {name: 'Piano, Upright', iconClass: 'icon-142', weight: 600, volume: 70, itemType: 'Miscellaneous'},
            {name: 'Piano, Grand', iconClass: 'icon-142', weight: 1200, volume: 80, itemType: 'Miscellaneous'},
            {name: 'Piano, Spinet/Console', iconClass: 'icon-143', weight: 420, volume: 60, itemType: 'Miscellaneous'},
            {name: 'Portable Record Player', iconClass: 'icon-144', weight: 14, volume: 2, itemType: 'Miscellaneous'},
            {name: 'Guitar', iconClass: 'icon-145', weight: 60, volume: 15, itemType: 'Miscellaneous'},
            {name: 'Bicycle', iconClass: 'icon-184', weight: 35, volume: 5, itemType: 'Sports'},
            {name: 'Bowling Ball & Bag', iconClass: 'icon-185', weight: 21, volume: 3, itemType: 'Sports'},
            {name: 'Elliptical Machine', iconClass: 'icon-186', weight: 280, volume: 40, itemType: 'Sports'},
            {name: 'Golf Bag', iconClass: 'icon-187', weight: 28, volume: 4, itemType: 'Sports'},
            {name: 'Pool Table Comp.', iconClass: 'icon-188', weight: 280, volume: 40, itemType: 'Sports'},
            {name: 'Pool Table Stand', iconClass: 'icon-189', weight: 105, volume: 15, itemType: 'Sports'},
            {name: 'Sled', iconClass: 'icon-190', weight: 14, volume: 2, itemType: 'Sports'},
            {name: 'Table, Game', iconClass: 'icon-191', weight: 105, volume: 15, itemType: 'Sports'},
            {name: 'Table, Ping Pong', iconClass: 'icon-192', weight: 280, volume: 40, itemType: 'Sports'},
            {name: 'Treadmill', iconClass: 'icon-193', weight: 250, volume: 35, itemType: 'Sports'},
            {name: 'Motorcycle', iconClass: 'icon-194', weight: 600, volume: 85, itemType: 'Sports'},
            {name: 'Weights, 50lbs', iconClass: 'icon-195', weight: 50, volume: 10, itemType: 'Sports'},
            {name: 'Weights, 100lbs', iconClass: 'icon-196', weight: 100, volume: 14, itemType: 'Sports'},
            {name: 'Weights, 150lbs', iconClass: 'icon-197', weight: 150, volume: 21, itemType: 'Sports'},
            {name: 'Pool Table', iconClass: 'icon-198', weight: 1400, volume: 200, itemType: 'Sports'},
            {name: 'Ping Pong Table', iconClass: 'icon-199', weight: 560, volume: 80, itemType: 'Sports'},
            {name: 'Arcade Machine', iconClass: 'icon-200', weight: 700, volume: 100, itemType: 'Sports'},
            {name: 'Kayak', iconClass: 'icon-201', weight: 100, volume: 250, itemType: 'Sports'},
            {name: 'Rug, Small', iconClass: 'icon-174', weight: 21, volume: 3, itemType: 'Soft Furniture & Carpets'},
            {name: 'Rug, Large or Pad', iconClass: 'icon-175', weight: 70, volume: 10, itemType: 'Soft Furniture & Carpets'},
            {name: 'Rug, Large', iconClass: 'icon-176', weight: 49, volume: 7, itemType: 'Soft Furniture & Carpets'},
            {name: 'Ottoman', iconClass: 'icon-177', weight: 60, volume: 8, itemType: 'Soft Furniture & Carpets'},
            {name: 'Sofa, 3 Cushions', iconClass: 'icon-178', weight: 350, volume: 50, itemType: 'Soft Furniture & Carpets'},
            {name: 'Sofa, 4 Cushions hide away', iconClass: 'icon-179', weight: 420, volume: 60, itemType: 'Soft Furniture & Carpets'},
            {name: 'Sofa, Loveseat', iconClass: 'icon-180', weight: 245, volume: 35, itemType: 'Soft Furniture & Carpets'},
            {name: 'Sofa, Per Section', iconClass: 'icon-181', weight: 210, volume: 30, itemType: 'Soft Furniture & Carpets'},
            {name: 'Sofa, Rattan/Wicker', iconClass: 'icon-182', weight: 70, volume: 10, itemType: 'Soft Furniture & Carpets'},
            {name: 'Futon', iconClass: 'icon-183', weight: 175, volume: 25, itemType: 'Soft Furniture & Carpets'},
            {name: 'Chair', iconClass: 'icon-66', weight: 35, volume: 5, itemType: 'Tables & Chairs'},
            {name: 'Stool', iconClass: 'icon-67', weight: 21, volume: 3, itemType: 'Tables & Chairs'},
            {name: 'Chair, Arm', iconClass: 'icon-68', weight: 70, volume: 10, itemType: 'Tables & Chairs'},
            {name: 'Chair, Occasional', iconClass: 'icon-69', weight: 105, volume: 15, itemType: 'Tables & Chairs'},
            {name: 'Chair, Overstuffed', iconClass: 'icon-70', weight: 175, volume: 25, itemType: 'Tables & Chairs'},
            {name: 'Chair, Rocker', iconClass: 'icon-71', weight: 105, volume: 15, itemType: 'Tables & Chairs'},
            {name: 'Footstool', iconClass: 'icon-72', weight: 14, volume: 2, itemType: 'Tables & Chairs'},
            {name: 'Piano Bench', iconClass: 'icon-73', weight: 35, volume: 5, itemType: 'Tables & Chairs'},
            {name: 'Folding Chair', iconClass: 'icon-74', weight: 31, volume: 3, itemType: 'Tables & Chairs'},
            {name: 'Office Chair', iconClass: 'icon-75', weight: 49, volume: 7, itemType: 'Tables & Chairs'},
            {name: 'Chairs, Child', iconClass: 'icon-76', weight: 21, volume: 3, itemType: 'Tables & Chairs'},
            {name: 'Chairs, Metal', iconClass: 'icon-77', weight: 21, volume: 3, itemType: 'Tables & Chairs'},
            {name: 'Office Desk', iconClass: 'icon-202', weight: 210, volume: 30, itemType: 'Tables & Chairs'},
            {name: 'Night Table', iconClass: 'icon-203', weight: 35, volume: 5, itemType: 'Tables & Chairs'},
            {name: 'Dining Table', iconClass: 'icon-204', weight: 210, volume: 30, itemType: 'Tables & Chairs'},
            {name: 'Breakfast Table', iconClass: 'icon-205', weight: 70, volume: 10, itemType: 'Tables & Chairs'},
            {name: 'Tables, Coffee', iconClass: 'icon-206', weight: 35, volume: 5, itemType: 'Tables & Chairs'},
            {name: 'Tables, Dropl/Occasional', iconClass: 'icon-207', weight: 84, volume: 12, itemType: 'Tables & Chairs'},
            {name: 'Tables, End', iconClass: 'icon-208', weight: 35, volume: 5, itemType: 'Tables & Chairs'},
            {name: 'Telephone Stand', iconClass: 'icon-209', weight: 35, volume: 5, itemType: 'Tables & Chairs'},
            {name: 'Card Table', iconClass: 'icon-210', weight: 14, volume: 2, itemType: 'Tables & Chairs'},
            {name: 'Sewing Machine Console', iconClass: 'icon-211', weight: 50, volume: 7, itemType: 'Tables & Chairs'},
            {name: 'Sewing Machine with Cabinet', iconClass: 'icon-212', weight: 140, volume: 20, itemType: 'Tables & Chairs'},
            {name: 'Utility Table', iconClass: 'icon-213', weight: 35, volume: 5, itemType: 'Tables & Chairs'},
            {name: 'Folding Table', iconClass: 'icon-214', weight: 40, volume: 10, itemType: 'Tables & Chairs'},
            {name: 'Child Table', iconClass: 'icon-215', weight: 35, volume: 5, itemType: 'Tables & Chairs'},
          ],
          movingRoomNo: null,
          activeRoom: 'Master Bed',
          activeItemCategory: 'Accessories',
          itemCategories: ['Accessories', 'Boxes', 'Beds', 'Appliances', 'Electronics', 'Outdoor', 'Home Storage Units', 'Miscellaneous', 'Sports', 'Soft Furniture & Carpets', 'Tables & Chairs'],
          calculationList: [],
          modCalculationList: [],
          allItemsCalculation: {
            master_bed: [],
            child_bed: [],
            guest_bed: [],
            living_room: [],
            kitchen: [],
            dining: [],
            studio: []
          },
          itemDetail: {
            name: '',
            weight: null
          },
          displaySummery: false
          // editable: true,
          // isDragging: false,
          // delayedDragging: false
        };
      },

      computed: {
        rooms() {
          if (this.movingRoomNo === 2) {
            return ['Master Bed', 'Guest Bed', 'Living Room', 'Kitchen', 'Dining']
          }else if(this.movingRoomNo === 3) {
            return ['Master Bed', 'Child Bed', 'Living Room', 'Kitchen', 'Dining', 'Guest Bed']
          }else {
            return ['Master Bed', 'Guest Bed', 'Living Room', 'Kitchen', 'Dining']

            // Master, Children, Living, Kitchen, Dining,
          }
        },

        movingListString() {
          return JSON.stringify(this.movingList, null, 2);
        },

        calculationListString() {
          return JSON.stringify(this.calculationList, null, 2);
        },

        getTotalCalculatedWeight() {
          let totalWeight = 0
          for (let item of this.calculationList) {
            totalWeight += item.weight
          }
          return totalWeight
        },

        getTotalVolume() {
          let totalVol = 0
          for (let item of this.calculationList) {
            totalVol += item.volume
          }
          return totalVol
        },

        itemsInActiveRoom() {
          return this.allItemsCalculation[this.activeRoom.trim().replace(' ', '_').toLowerCase()]
        },

        filteredItems() {
          return this.movingList.filter(item => item.itemType === this.activeItemCategory)
          // console.log(filteredMovingList)
        },
      },

      mounted() {
      },

      methods: {
        cloned(evt) {
          // console.log(this.activeRoom)
          if (this.allItemsCalculation[this.activeRoom.trim().replace(' ', '_').toLowerCase()].length > 0) {
            const existingItem = this.allItemsCalculation[this.activeRoom.trim().replace(' ', '_').toLowerCase()].find(element => element.item.name === evt.added.element.name)
            if (existingItem) {
              existingItem.qty += 1
            } else {
              let addingItem = {
                item: evt.added.element,
                qty: 1
              }
              this.allItemsCalculation[this.activeRoom.trim().replace(' ', '_').toLowerCase()].push(addingItem)
            }
          } else {
            let addingItem = {
              item: evt.added.element,
              qty: 1
            }
            this.allItemsCalculation[this.activeRoom.trim().replace(' ', '_').toLowerCase()].push(addingItem)
          }
          // console.log(this.allItemsCalculation)
          // console.log(evt.added.element.name)
          // console.log(this.calculationList)
        },

        addToCalculationList(element){
          this.calculationList.push(element)
          if (this.allItemsCalculation[this.activeRoom.trim().replace(' ', '_').toLowerCase()].length > 0) {
            const existingItem = this.allItemsCalculation[this.activeRoom.trim().replace(' ', '_').toLowerCase()].find(obj => obj.item.name === element.name)
            if (existingItem) {
              existingItem.qty += 1
            } else {
              let addingItem = {
                item: element,
                qty: 1
              }
              this.allItemsCalculation[this.activeRoom.trim().replace(' ', '_').toLowerCase()].push(addingItem)
            }
          } else {
            let addingItem = {
              item: element,
              qty: 1
            }
            this.allItemsCalculation[this.activeRoom.trim().replace(' ', '_').toLowerCase()].push(addingItem)
          }
          // console.log(this.calculationList)
        },

        removed(evt) {
          console.log(evt)
        },

        removeFromCalculationList(element){
          console.log(element.item.name)
          if (this.allItemsCalculation[this.activeRoom.trim().replace(' ', '_').toLowerCase()].length > 0) {
            let existingItem = this.allItemsCalculation[this.activeRoom.trim().replace(' ', '_').toLowerCase()].find(obj => obj.item.name === element.item.name)

            if (existingItem.qty > 1) {
              existingItem.qty -= 1
            } else {
              let indexAllCalc = this.allItemsCalculation[this.activeRoom.trim().replace(' ', '_').toLowerCase()].indexOf(existingItem)
              // let indexCalc = this.calculationList.indexOf(existingItem)
              this.allItemsCalculation[this.activeRoom.trim().replace(' ', '_').toLowerCase()].splice(indexAllCalc, 1)
              // this.calculationList.splice(indexCalc, 1)
            }
          }

          if(this.calculationList.length > 0){
            let existingItem = this.calculationList.find(item => item.name === element.item.name)
            let remIndex = this.calculationList.lastIndexOf(existingItem)
            console.log(remIndex)
            if(existingItem){
              this.calculationList.splice(remIndex, 1)
            }
          }
        },

        activateRoom(room) {
          this.activeRoom = room
          // if(!(room.trim().replace(' ', '_').toLowerCase() in this.allItemsCalculation)){
          //   this.allItemsCalculation[room.trim().replace(' ', '_').toLowerCase()] = []
          // }

          // this.itemsInActiveRoom()

          // console.log(this.allItemsCalculation)
        },

        totalItemsInRoom(room){
          let roomName = room.trim().replace(' ', '_').toLowerCase();
          let totalQty = 0
          if(roomName in this.allItemsCalculation){
              for(let item of this.allItemsCalculation[roomName.toString()]){
                totalQty += item.qty
              }
          }

          return totalQty
        },

        showItemDetail(element){
          this.itemDetail.name = element.name
          this.itemDetail.weight = element.weight
        },

        hideDetail(){
          this.itemDetail = {
            name: '',
            weight: null
          }
        },

        activateCategory(category) {
          this.activeItemCategory = category
          // this.filterItems()
        },

        itemQuantity(itemName) {
          let multipleEntry = this.calculationList.filter(item => item.name === itemName)
          return multipleEntry.length
        },

        activeRoomItems() {
          return this.allItemsCalculation[this.activeRoom.trim().replace(' ', '_').toLowerCase()]
        },

        showCalculationSummery(){
          if(this.calculationList.length > 0){
            this.displaySummery = true
          }else{
            alert("You have add items for calculation and then check summery")
          }
        }
      },
    })
    new Vue({
      el: '#root',
      components: {
        draggable: window['vuedraggable']
      },
    });
  </script>
</body>

</html>