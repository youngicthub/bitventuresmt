
@extends('layouts.base')

@section('title', 'Home')

@inject('content', 'App\Http\Controllers\FrontController')
@section('content')
      

          
          <article class="main-layout__content" >
            <!-- Begin page-->
            <!---->
            <section class="intro auth-layout" >
              <div class="container">
                <div class="intro__row"> 
                  <div class="intro__col"> <img class="intro__robot" src="temp/custom/assets/images/intro/robot.png" alt="" role="presentation"/>
                  </div>
                  <div class="intro__col">
                    <div class="intro__content">
                      <h1 class="intro__title"> With  {{$settings->site_name}} <span class="intro-bremby"> </span>
                      </h1>
                      <div class="intro__description">
                        <p><span class="color-primary">GET</span> LIFETIME INCOME ON INVESTMENT</p>
                      </div>
					  
				  	  			   	
					  <a class="btn btn--primary" href="login">OPEN DEPOSIT</a>
				   					  
                      <ul class="intro-icons"> 
                        <li>
                          <div class="intro-icons__icon"style="width: 100%;">
                            <svg class="svg-icon">
                              <use href="temp/custom/assets/icons/sprite.svg#icon-002-blockchain-1"></use>
                            </svg>
                          </div>
                          <div class="intro-icons__description"style="text-align: center;">
                            <p>Professional Crypto Industry Development Team </p>
                          </div>
                        </li>
                        <li>
                          <div class="intro-icons__icon"style="width: 100%;">
                            <svg class="svg-icon">
                              <use href="temp/custom/assets/icons/sprite.svg#icon-001-blockchain"></use>
                            </svg>
                          </div>
                          <div class="intro-icons__description"style="text-align: center;">
                            <p>Unique robot for trading </p>
                          </div>
                        </li>
                        <li>
                          <div class="intro-icons__icon"style="width: 100%;">
                            <svg class="svg-icon">
                              <use href="temp/custom/assets/icons/sprite.svg#icon-003-user"></use>
                            </svg>
                          </div>
                          <div class="intro-icons__description"style="text-align: center;">
                            <p>Manage operations without user intervention</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="intro__bg">
                <div id="animation_container" style="background-color:rgba(0, 0, 153, 0.00); width:1900px; height:858px">
                  <canvas id="canvas" width="1900" height="858" style="position: absolute; display: block; background-color:rgba(0, 0, 153, 0.00);"></canvas>
                  <div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; width:1900px; height:858px; position: absolute; left: 0px; top: 0px; display: block;"></div>
                </div>
              </div>
            </section>
            </section>
            <!-- tradingveiw 1 -->
            <div class="tradingview-widget-container "data-aos="fade-up">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener" target="_blank"><span class="blue-text">Market Data</span></a> by TradingView</div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                {
                "colorTheme": "dark",
                "dateRange": "12m",
                "showChart": true,
                "locale": "en",
                "largeChartUrl": "",
                "isTransparent": true,
                "width": "100%",
                "height": "500",
                "plotLineColorGrowing": "rgba(65, 224, 136, 1)",
                "plotLineColorFalling": "rgba(65, 224, 136, 1)",
                "gridLineColor": "rgba(65, 224, 136, 1)",
                "scaleFontColor": "rgba(65, 224, 136, 1)",
                "belowLineFillColorGrowing": "rgba(65, 224, 136, 0.12)",
                "belowLineFillColorFalling": "rgba(65, 224, 136, 0.12)",
                "symbolActiveColor": "rgba(65, 224, 136, 0.12)",
                "tabs": [
                  {
                    "title": "Indices",
                    "symbols": [
                      {
                        "s": "OANDA:SPX500USD",
                        "d": "S&P 500"
                      },
                      {
                        "s": "OANDA:NAS100USD",
                        "d": "Nasdaq 100"
                      },
                      {
                        "s": "FOREXCOM:DJI",
                        "d": "Dow 30"
                      },
                      {
                        "s": "INDEX:NKY",
                        "d": "Nikkei 225"
                      },
                      {
                        "s": "INDEX:DEU30",
                        "d": "DAX Index"
                      },
                      {
                        "s": "OANDA:UK100GBP",
                        "d": "FTSE 100"
                      }
                    ],
                    "originalTitle": "Indices"
                  },
                  {
                    "title": "Commodities",
                    "symbols": [
                      {
                        "s": "CME_MINI:ES1!",
                        "d": "E-Mini S&P"
                      },
                      {
                        "s": "CME:6E1!",
                        "d": "Euro"
                      },
                      {
                        "s": "COMEX:GC1!",
                        "d": "Gold"
                      },
                      {
                        "s": "NYMEX:CL1!",
                        "d": "Crude Oil"
                      },
                      {
                        "s": "NYMEX:NG1!",
                        "d": "Natural Gas"
                      },
                      {
                        "s": "CBOT:ZC1!",
                        "d": "Corn"
                      }
                    ],
                    "originalTitle": "Commodities"
                  },
                  {
                    "title": "Bonds",
                    "symbols": [
                      {
                        "s": "CME:GE1!",
                        "d": "Eurodollar"
                      },
                      {
                        "s": "CBOT:ZB1!",
                        "d": "T-Bond"
                      },
                      {
                        "s": "CBOT:UB1!",
                        "d": "Ultra T-Bond"
                      },
                      {
                        "s": "EUREX:FGBL1!",
                        "d": "Euro Bund"
                      },
                      {
                        "s": "EUREX:FBTP1!",
                        "d": "Euro BTP"
                      },
                      {
                        "s": "EUREX:FGBM1!",
                        "d": "Euro BOBL"
                      }
                    ],
                    "originalTitle": "Bonds"
                  },
                  {
                    "title": "Forex",
                    "symbols": [
                      {
                        "s": "FX:EURUSD"
                      },
                      {
                        "s": "FX:GBPUSD"
                      },
                      {
                        "s": "FX:USDJPY"
                      },
                      {
                        "s": "FX:USDCHF"
                      },
                      {
                        "s": "FX:AUDUSD"
                      },
                      {
                        "s": "FX:USDCAD"
                      }
                    ],
                    "originalTitle": "Forex"
                  }
                ]
              }
                </script>
              </div>
              <!-- TradingView Widget END -->
              <br>

              
          <!-- ============================================================================================================================ -->
   <div class="tradingview-widget-container__widget swiper-slide" data-aos="fade-down"></div>
   <script type   ="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
   {
   "width": "100%",
   "height": "400",
   "colorTheme": "dark",
   "currencies": [
     "EUR",
     "USD",
     "JPY",
     "GBP",
     "CHF",
     "AUD",
     "CAD",
     "NZD",
     "CNY"
   ],
   "locale": "en"
 }
   </script>
 </div>
 <!-- TradingView Widget END -->
 <br>
      
            <section class="deposits">
              <div class="container container-large">
                <div class="section-intro"> 
                  <h3 class="title">Investment Proposals                  </h3>
                  <div class="section-intro__description"> 
                    <p style="margin-top: -20px;">{{$settings->site_name}} employees ensure that every investor in our company can earn money</p>
                  </div>
                </div>
                <div class="deposits__block"> 
                  <div class="deposits__slider swiper-container swiper-no-swiping js-swiper-deposits">
                    <div class="swiper-wrapper">
                        @foreach ($plans as $plan)
                      <div class="swiper-slide">
                        <div class="deposits-item is-active" deposit="Starting">
                          <div class="deposits-item__content">
                            <div class="deposits-item__count"style="margin: 0;"> 
                              <div class="deposits-item__count-number">{{$plan->increment_amount}}                              </div>
                              <div class="deposits-item__count-content"> 
                                <p class="deposits-item__count-sub">%
                                </p>
                                <p class="deposits-item__count-desc">{{ $plan->name }}                               </p>
                              </div>
                            </div>
                            <div class="deposits-item__item deposits-item__item--earn">
                              <p class="deposits-item__item-title">{{$plan->increment_interval}}</p>
                            </div>
                            <div class="deposits-item__item"> 
                              <p class="deposits-item__item-title">Deposit: 
                              </p>
                              <p class="deposits-item__item-value">{{ $settings->currency }}{{ $plan->min_price }}  - {{ $settings->currency }}{{ $plan->max_price }}
                              </p>
                            </div>
                            <div class="deposits-item__item deposits-item__item--earn">
                              <p class="deposits-item__item-title">{{$plan->expiration}}</p>
                            </div>
                          </div>
                        </div>
                      </div>
					                 <!--       <div class="swiper-slide">-->
                      <!--  <div class="deposits-item " deposit="Standart">-->
                      <!--    <div class="deposits-item__content">-->
                      <!--      <div class="deposits-item__count"style="margin: 0;"> -->
                      <!--        <div class="deposits-item__count-number">2.5                              </div>-->
                      <!--        <div class="deposits-item__count-content"> -->
                      <!--          <p class="deposits-item__count-sub">%-->
                      <!--          </p>-->
                      <!--          <p class="deposits-item__count-desc">Standart                                </p>-->
                      <!--        </div>-->
                      <!--      </div>-->
                      <!--      <div class="deposits-item__item deposits-item__item--earn">-->
                      <!--        <p class="deposits-item__item-title">Daily</p>-->
                      <!--      </div>-->
                      <!--      <div class="deposits-item__item"> -->
                      <!--        <p class="deposits-item__item-title">Deposit: -->
                      <!--        </p>-->
                      <!--        <p class="deposits-item__item-value">5000  - 250000 USD-->
                      <!--        </p>-->
                      <!--      </div>-->
                      <!--      <div class="deposits-item__item deposits-item__item--earn">-->
                      <!--        <p class="deposits-item__item-title">every day</p>-->
                      <!--      </div>-->
                      <!--    </div>-->
                      <!--  </div>-->
                      <!--</div>-->
					                 <!--       <div class="swiper-slide">-->
                      <!--  <div class="deposits-item " deposit="Premium">-->
                      <!--    <div class="deposits-item__content">-->
                      <!--      <div class="deposits-item__count"style="margin: 0;"> -->
                      <!--        <div class="deposits-item__count-number">3.3                              </div>-->
                      <!--        <div class="deposits-item__count-content"> -->
                      <!--          <p class="deposits-item__count-sub">%-->
                      <!--          </p>-->
                      <!--          <p class="deposits-item__count-desc">Premium                                </p>-->
                      <!--        </div>-->
                      <!--      </div>-->
                      <!--      <div class="deposits-item__item deposits-item__item--earn">-->
                      <!--        <p class="deposits-item__item-title">Daily</p>-->
                      <!--      </div>-->
                      <!--      <div class="deposits-item__item"> -->
                      <!--        <p class="deposits-item__item-title">Deposit: -->
                      <!--        </p>-->
                      <!--        <p class="deposits-item__item-value">10000  - 100000 USD-->
                      <!--        </p>-->
                      <!--      </div>-->
                      <!--      <div class="deposits-item__item deposits-item__item--earn">-->
                      <!--        <p class="deposits-item__item-title">every day</p>-->
                      <!--      </div>-->
                      <!--    </div>-->
                      <!--  </div>-->
                      <!--</div>-->
                       @endforeach
					                        </div>
					                        
                    </div>
                  <div class="deposits__row"> 
                    <div class="deposits__col-sidebar"> 
                      <div class="limits-warning"> 
                        <div class="limits-warning__top">
                          <h4 class="limits-warning__title">GENERAL COMMISSIONS 
                          </h4>
                        </div>
                        <div class="limits-warning__content">
                          <p>These commissions are charged by {{$settings->site_name}} for the platform to work. They are not related to the profit received by our investors</p>
                        </div>
                      </div>
                    </div>
                    <div class="deposits__col-content">
                      
 <div data-deposit="Starting" style="display:block">
                        <div class="typography"> 
                          <ul>
                            <li> 
                              <h4>COMPANY COMMISSION</h4>
                              <p><span class="color-primary">0.5%</span> from the received profit by the robot. This commission shows the earnings of the entire {{$settings->site_name}} structure, namely, each employee.</p>
                            </li>
                            <li> 
                              <h4>ADMINISTRATIVE COMMISSION</h4>
                              <p><span class="color-primary">0.5%</span> for technical support of the robot and the company as a whole. This commission includes the development and marketing costs of the company.</p>
                            </li>
                          </ul>
                        </div>
</div>
<div data-deposit="Standart" >
                        <div class="typography"> 
                          <ul>
                            <li> 
                              <h4>COMPANY COMMISSION</h4>
                              <p><span class="color-primary">0.5%</span> from the received profit by the robot. This commission shows the earnings of the entire {{$settings->site_name}} structure, namely, each employee.</p>
                            </li>
                            <li> 
                              <h4>ADMINISTRATIVE COMMISSION</h4>
                              <p><span class="color-primary">0.5%</span> for technical support of the robot and the company as a whole. This commission includes the development and marketing costs of the company.</p>
                            </li>
                          </ul>
                        </div>
</div>
<div data-deposit="Premium" >
                        <div class="typography"> 
                          <ul>
                            <li> 
                              <h4>COMPANY COMMISSION</h4>
                              <p><span class="color-primary">0.5%</span> from the received profit by the robot. This commission shows the earnings of the entire {{$settings->site_name}} structure, namely, each employee.</p>
                            </li>
                            <li> 
                              <h4>ADMINISTRATIVE COMMISSION</h4>
                              <p><span class="color-primary">0.5%</span> for technical support of the robot and the company as a whole. This commission includes the development and marketing costs of the company.</p>
                            </li>
                          </ul>
                        </div>
</div>
					  
					  
                    </div>
                  </div>
                  <div class="deposits__calculate">
                    <div class="calculate-profit"><a class="btn btn--line-primary js-open-calculate-form"> <span>Calculate Profit</span></a>
                      <form>
                        <div class="calculate-profit__block"> 
                          <div class="calculate-profit__block-row">
                            <div class="field"> 
                              <label>Tariff Plan</label>
                              <div class="select-deposit"> 
                                <div class="select-deposit__trigger">
								<p class="select-deposit__value"><span class="select-deposit__val">Starting</span> <strong><span class="select-deposit__percent">1.8</span><sup>%</sup></strong></p>
                                </div>
                                <select name="" id="selectid">
                                  <option value="2" data-percent="1.8">Starting</option>
                                  <option value="3" data-percent="2.5">Standart</option>
                                  <option value="4" data-percent="3.3">Premium</option>
                                </select>
                              </div>
                            </div>
                            <div class="field"> 
                              <label>Deposit Amount</label>
							  <b id="eror"style="color: red;"></b>
                              <div class="field-group"> 
                                <input class="field-gray field-counter" type="number" name="amount" id="sum" value="100">
                                <div class="field-group__currency">USD</div>
                              </div>
                            </div>
                            <ul class="calculate-stats"> 
                              <li>
                                <p class="calculate-stats__value" id="daily">-</p>
                                <p class="calculate-stats__desc">Daily Income                                </p>
                              </li>
                              <li class="calculate-stats__separate-li">
                                <div class="calculate-stats__separate">
                                </div>
                              </li>
                              <li>
                                <p class="calculate-stats__value"id="weekly">-</p>
                                <p class="calculate-stats__desc">Weekly Income</p>
                              </li>
                              <li class="calculate-stats__separate-li">
                                <div class="calculate-stats__separate">
                                </div>
                              </li>
                              <li>
                                <p class="calculate-stats__value"id="mountly">-</p>
                                <p class="calculate-stats__desc">Monthly Income</p>
                              </li>
                            </ul>
                         	
					  <a class="btn btn--primary" href="login">Deposit</a>
				                             </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </section>
			
    <script src="temp/custom/js/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	
//Calculator
function calc(n){

select = document.getElementById("selectid");
tar = select.value;

alert;
var okrs	= [2];


 minMoneyur2 = 1000;
 
 minMoneyu2 = (1000);
 maxMoneyu2 = (5000);
 
valut = "USD";


 minMoneyur3 = 5000;
 
 minMoneyu3 = (5000);
 maxMoneyu3 = (250000);
 
valut = "USD";


 minMoneyur4 = 10000;
 
 minMoneyu4 = (10000);
 maxMoneyu4 = (100000);
 
valut = "USD";




		

	if(tar == 2){
		
var percent 	= [0.018];
		

		minMoneyr = minMoneyur2;
		minMoney = minMoneyu2;
		maxMoney = maxMoneyu2;
	
	}
	if(tar == 3){
		
var percent 	= [0.025];
		

		minMoneyr = minMoneyur3;
		minMoney = minMoneyu3;
		maxMoney = maxMoneyu3;
	
	}
	if(tar == 4){
		
var percent 	= [0.033];
		

		minMoneyr = minMoneyur4;
		minMoney = minMoneyu4;
		maxMoney = maxMoneyu4;
	
	}

	
	
		if(!n){
			document.getElementById("sum").value = minMoneyr; 
		}
		
		if(parseFloat($("#sum").val())<minMoney){
	$("#eror").text("Min: " + minMoney +"");
		}else if(parseFloat($("#sum").val())>maxMoney){
	$("#eror").text("Max: " + maxMoney +"");
		}else if(parseFloat($("#sum").val())<=maxMoney){
	$("#eror").text("");
		}
			


	amount = parseFloat($("#sum").val());
		
			daily = amount * percent;
			daily = daily.toFixed(okrs);
			weekly = daily * 7;
			weekly = weekly.toFixed(okrs);
			mountly = daily * 30;
			mountly = mountly.toFixed(okrs);

			if(amount < minMoney || isNaN(amount) == true){
				$("#daily").text("-");
				$("#weekly").text("-");
				$("#mountly").text("-");
				
			} else {			
				$("#daily").html(daily +'<sub> '+ valut +' </sub>');
				$("#weekly").html(weekly +'<sub> '+ valut +' </sub>');
				$("#mountly").html(mountly +'<sub> '+ valut +' </sub>');
			}

			

	}
	

	
	if($("#sum, #selectid").change){
		calc(false);
	}
	$("#sum").keyup(function(){
		calc(true);
	});
	$("#selectid").click(function(){
		calc(false);
	});
	$("#selectid").change(function(){
		calc(false);
	});
}); 
</script>   
 
 
 
 <style>
.steps .steps-item {text-align: center;
}
</style>
            <section class="steps">
              <div class="container">
                <div class="section-intro"> 
                  <h3 class="title">Live TESTIMONIES                 </h3>
                </div>
                <div class="steps__slider swiper-container swiper-no-swiping js-swiper-steps">
                  <div class="steps__hearts"> <img src="temp/custom/assets/images/steps/1.png" alt=""><img src="temp/custom/assets/images/steps/2.png" alt="">
                  </div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="steps-item"> 
                        <p class="steps-item__count"><span>#</span>1
                        </p>
                        
                        
                        <video width="320" height="240" controls>
  <source src="temp/custom/video1.mp4" type="video/mp4">
  <source src="temp/custom/video1.mp4" type="video/ogg">
</video>
                        
                                
                       
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="steps-item"> 
                        <p class="steps-item__count"><span>#</span>2
                        </p>
                        
                         <video width="320" height="240" controls>
  <source src="temp/custom/video3.mp4" type="video/mp4">
  <source src="temp/custom/video3.mp4" type="video/ogg">
</video>
                        
                        
                        <div class="steps-item__description"> 
                          
                        </div>
                      </div>
                    </div>
                    
                    
                    
                       <div class="swiper-slide">
                      <div class="steps-item"> 
                        <p class="steps-item__count"><span>#</span>3
                        </p>
                        
                         <video width="320" height="240" controls>
  <source src="temp/custom/video4.mp4" type="video/mp4">
  <source src="temp/custom/video4.mp4" type="video/ogg">
</video>
                        
                        
                        <div class="steps-item__description"> 
                          
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="steps-item"> 
                        <p class="steps-item__count"><span>#</span>4
                        </p>
                        
                         <video width="320" height="240" controls>
  <source src="temp/custom/video5.mp4" type="video/mp4">
  <source src="temp/custom/video5.mp4" type="video/ogg">
</video>
                        <div class="steps-item__description"> 
                          <
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>   
            
            
            
            
            <section class="funds">
              <div class="container">
                <div class="section-intro"> 
                  
                </div>
                <div class="funds__slider swiper-container swiper-no-swiping js-swiper-funds">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="funds-item"> 
                        
                            <video width="320" height="240" controls>
  <source src="temp/custom/video7.mp4" type="video/mp4">
  <source src="temp/custom/video7.mp4" type="video/ogg">
</video>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="funds-item is-active">
                            <video width="320" height="240" controls>
  <source src="temp/custom/video8.mp4" type="video/mp4">
  <source src="temp/custom/video8.mp4" type="video/ogg">
</video>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="funds-item"> 
                             <video width="320" height="240" controls>
  <source src="temp/custom/video9.mp4" type="video/mp4">
  <source src="temp/custom/video9.mp4" type="video/ogg">
</video>
                        
                      </div>
                    </div>
                  </div>
                </div>
               
              </div>
            </section>            
<!---->
<div data-aos="fade-up" style="height:560px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #40871d; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #40871d;padding:1px;padding: 0px; margin: 0px; width: 100%;"><div style="height:540px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=chart&theme=dark&coin_id=859&pref_coin_id=1505" width="100%" height="536px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;"></iframe></div><div style="color:#40871d; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 600; color:#40871d ; text-decoration:none; font-size:12px">Cryptocurrency Prices</a>&nbsp;</div></div>
 <br>
 
            <!---->
            <section class="statisticts-section">
              <div class="container container-large">
                <div class="statisticts-section__row"> 
                  <div class="statisticts-section__col">
                    <div class="statisticts-block">
                      <h3 class="title">Last Deposits                      </h3>
                      <table> 
                        <tbody> 
                        					  
                          <tr> 
                            <td> 
                              <div class="username">Vagner                              </div>
                            </td>                            <td style="text-align: center;"><img src="temp/custom/img/ps/svg/trx.svg" style="height: 35px;"alt=""></td>
							                            <td>
                              <div class="price-gradient-primary">860000 trx</div>
                            </td>
                          </tr>
 
                          <tr> 
                            <td> 
                              <div class="username">Austin132002                              </div>
                            </td>                            <td style="text-align: center;"><img src="temp/custom/img/ps/svg/doge.svg" style="height: 35px;"alt=""></td>
							                            <td>
                              <div class="price-gradient-primary">5000 doge</div>
                            </td>
                          </tr>
 
                          <tr> 
                            <td> 
                              <div class="username">Qinny                              </div>
                            </td>                            <td style="text-align: center;"><img src="temp/custom/img/ps/svg/usdttrc20.svg" style="height: 35px;"alt=""></td>
							                            <td>
                              <div class="price-gradient-primary">1800 usdt</div>
                            </td>
                          </tr>
 
                          <tr> 
                            <td> 
                              <div class="username">rannovan                              </div>
                            </td>                            <td style="text-align: center;"><img src="temp/custom/img/ps/svg/ltc.svg" style="height: 35px;"alt=""></td>
							                            <td>
                              <div class="price-gradient-primary">500.2 ltc</div>
                            </td>
                          </tr>
 
                          <tr> 
                            <td> 
                              <div class="username">Parimpe                              </div>
                            </td>                            <td style="text-align: center;"><img src="temp/custom/img/ps/pmusd.png" style="height: 35px;"alt=""></td>
							                            <td>
                              <div class="price-gradient-primary">5700 usd</div>
                            </td>
                          </tr>
 
                          <tr> 
                            <td> 
                              <div class="username">ahmadm1990                              </div>
                            </td>                            <td style="text-align: center;"><img src="temp/custom/img/ps/svg/trx.svg" style="height: 35px;"alt=""></td>
							                            <td>
                              <div class="price-gradient-primary">103000.68 trx</div>
                            </td>
                          </tr>
	
						  
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="statisticts-section__col">
                    <div class="statisticts-block statisticts-block--gradient">
                      <h3 class="title">Last Payments                      </h3>
                      <table> 
                        <tbody> 
                                                  					  
                          <tr> 
                            <td> 
                              <div class="username">Serg337                              </div>
                            </td>                            <td style="text-align: center;"><img src="temp/custom/img/ps/pmusd.png" style="height: 35px;"alt=""></td>
							                            <td>
                              <div class="price-gradient-primary">3000.6 usd</div>
                            </td>
                          </tr>
 
                          <tr> 
                            <td> 
                              <div class="username">016timur                              </div>
                            </td>                            <td style="text-align: center;"><img src="temp/custom/img/ps/pmusd.png" style="height: 35px;"alt=""></td>
							                            <td>
                              <div class="price-gradient-primary">10000.36 usd</div>
                            </td>
                          </tr>
 
                          <tr> 
                            <td> 
                              <div class="username">Temirkhan                              </div>
                            </td>                            <td style="text-align: center;"><img src="temp/custom/img/ps/svg/usdttrc20.svg" style="height: 35px;"alt=""></td>
							                            <td>
                              <div class="price-gradient-primary">139887.45 usdt</div>
                            </td>
                          </tr>
 
                          <tr> 
                            <td> 
                              <div class="username">Aom2525                              </div>
                            </td>                            <td style="text-align: center;"><img src="temp/custom/img/ps/pmusd.png" style="height: 35px;"alt=""></td>
							                            <td>
                              <div class="price-gradient-primary">5660.26 usd</div>
                            </td>
                          </tr>
 
                          <tr> 
                            <td> 
                              <div class="username">Tik188                              </div>
                            </td>                            <td style="text-align: center;"><img src="temp/custom/img/ps/pmusd.png" style="height: 35px;"alt=""></td>
							                            <td>
                              <div class="price-gradient-primary">14212.17 usd</div>
                            </td>
                          </tr>
 
                          <tr> 
                            <td> 
                              <div class="username">Qinny                              </div>
                            </td>                            <td style="text-align: center;"><img src="temp/custom/img/ps/pmusd.png" style="height: 35px;"alt=""></td>
							                            <td>
                              <div class="price-gradient-primary">6500 usd</div>
                            </td>
                          </tr>
	
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!---->
<style>
.steps .steps-item {text-align: center;
}
</style>
            <section class="steps">
              <div class="container">
                <div class="section-intro"> 
                  <h3 class="title">3 STEPS TO START                  </h3>
                </div>
                <div class="steps__slider swiper-container swiper-no-swiping js-swiper-steps">
                  <div class="steps__hearts"> <img src="temp/custom/assets/images/steps/1.png" alt=""><img src="temp/custom/assets/images/steps/2.png" alt="">
                  </div>
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="steps-item"> 
                        <p class="steps-item__count"><span>#</span>1
                        </p>
                        <h4 class="steps-item__title">REGISTRATION                        </h4>
                        <div class="steps-item__description"> 
                          <p>Click the Register button. Fill in your details to create a FREE {{$settings->site_name}} account in seconds</p>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="steps-item"> 
                        <p class="steps-item__count"><span>#</span>2
                        </p>
                        <h4 class="steps-item__title">CHOOSE INVESTMENT PLAN                        </h4>
                        <div class="steps-item__description"> 
                          <p>We offer a variety of investment plans to suit your financial goals. After reading, make a deposit</p>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="steps-item"> 
                        <p class="steps-item__count"><span>#</span>3
                        </p>
                        <h4 class="steps-item__title">START EARNING                        </h4>
                        <div class="steps-item__description"> 
                          <p>After making a deposit, watch your capital grow by accumulating daily profit in real time</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>            <!---->

            <section class="investment">
              <div class="container">
                <div class="investment__row"> 
                  <div class="investment__col"> 
                    <div class="section-intro"> 
                      <h3 class="title">REFERRAL PROGRAM                      </h3>
                      <div class="section-intro__description"> 
                        <p>Anyone can take part in the affiliate program. It allows you to receive generous rewards by inviting new members</p>
                      </div>
                    </div>
                    <ul class="investment-stats"> 
                      <li> 
                        <p class="title">4 LEVELS OF REFERRAL PROGRAM                        </p>
                        <div class="section-intro__description"> 
                          <p>Get extra profit when people in your structure invite new investors to the company</p>
                        </div>
                      </li>
                      <li>
                        <p class="investment-stats__count gradient-text"style="font-size: 75px;">7<sup>%</sup> -  3<sup>%</sup><br>2<sup>%</sup> -  1<sup>%</sup></p>
                      </li>
                    </ul>
                  </div>
                  <div class="investment__col"> <a class="notebook-video" href="" data-fancybox="data-fancybox"> <span class="notebook-video__content"><span class="notebook-video__title">VIDEO PRESENTATION</span><span class="notebook-video__icon"> 
                    <svg class="svg-icon">
                      <use href="temp/custom/assets/icons/sprite.svg#icon-play"></use>
                    </svg></span></span><img src="temp/custom/assets/images/investment/notebook.png" alt=""></a>
                  </div>
                </div>
                <div class="investment__slider swiper-container swiper-no-swiping js-swiper-advantages">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="advantages-item">
                        <div class="advantages-item__icon"style="width: 100%;"> 
                          <svg class="svg-icon">
                            <use href="temp/custom/assets/icons/sprite.svg#icon-002-24-hours"></use>
                          </svg>
                        </div>
                        <div class="advantages-item__description"style="text-align: center;"> 
                          <p>ROBOT TRADING WITHOUT WEEKENDS AND HOLIDAYS</p>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="advantages-item">
                        <div class="advantages-item__icon"style="width: 100%;"> 
                          <svg class="svg-icon">
                            <use href="assets/icons/sprite.svg#icon-003-transfer"></use>
                          </svg>
                        </div>
                        <div class="advantages-item__description"style="text-align: center;"> 
                          <p>WITHDRAWAL 24/7</p>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="advantages-item">
                        <div class="advantages-item__icon"style="width: 100%;"> 
                          <svg class="svg-icon">
                            <use href="temp/custom/assets/icons/sprite.svg#icon-001-wallet"></use>
                          </svg>
                        </div>
                        <div class="advantages-item__description"style="text-align: center;"> 
                          <p>BIG NUMBER OF PAYMENT SYSTEMS</p>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="advantages-item">
                        <div class="advantages-item__icon"style="width: 100%;"> 
                          <svg class="svg-icon">
                            <use href="temp/custom/assets/icons/sprite.svg#icon-004-user"></use>
                          </svg>
                        </div>
                        <div class="advantages-item__description"style="text-align: center;"> 
                          <p>100% ANONYMOUS AND TRANSPARENCY OF THE WORK OF THE ROBOT</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

				<div class="payments-and-footer-wrapper">
              <div class="payments-and-footer-wrapper__inner"style="padding-top: 70px;">
					  <section class="payments"style="margin-bottom: 20px;">
                  <div class="container">
                    <div class="payments__row"> 
                      <div class="payments__col"> <img src="temp/custom/assets/images/payments/payment.png" alt="">
                      </div>
                      <div class="payments__col">
                        <div class="payments__content">
                          <div class="section-intro"> 
                            <h3 class="title">PAYMENT SYSTEMS                            </h3>
                            <div class="section-intro__description"> 
                              <p>{{$settings->site_name}} supports a big number of payment systems</p>
                            </div>
                          </div>
                          <div class="typography"> 
                            <p>Our company does not charge commissions for opening a deposit, as well as withdrawing funds from the platform</p>
                          </div>
                          <div class="payments__buttons"> 
           	
					  <a class="btn btn--line-primary" href="login"><span>INVEST</span></a>
				                             </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                  </div>
                  </div>

				
    <div id="button-up">
        <i class="fa fa-chevron-up"></i>	
    </div>    <link rel="stylesheet" href="https:/cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	    #button-up{
#button-up{
display: none;
position: fixed;
right: 20px;
bottom: 60px;
color: #000;
background-color: white;
text-align: center;
font-size: 30px;
padding: 3px 10px 10px 10px;
transition: .3s;
border-radius: 50px;
width: 50px;
height: 50px;
z-index: 9999;
visibility: hidden;
    }
     
    #button-up:hover{
      cursor: pointer;
      background-color: #E8E8E8;
      transition: .3s;
    }
	</style>
	    <script>
    $(document).ready(function() { 
      var button = $('#button-up');	
      $(window).scroll (function () {
        if ($(this).scrollTop () > 300) {
          button.fadeIn();
        } else {
          button.fadeOut();
        }
    });	 
    button.on('click', function(){
    $('body, html').animate({
    scrollTop: 0
    }, 800);
    return false;
    });		 
    });
    </script><script src="" async></script>
    
  <script src="//code.jivosite.com/widget/UbzlRR93W3" async></script>

@endsection