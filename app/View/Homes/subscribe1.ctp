<style type="text/css">
  .subsborder{
    border-right: solid 1px;
    border-color: lightgrey;
    margin-left: 7%;
    text-decoration: none!important;
  }
  .asubs:hover{
    text-decoration: none;
  }
  .asubs{
    color: #0c786b!important;
  }
  .asubs, select{
    text-decoration: none!important;
  }
  .spanhoversubs:hover{
    border:solid 1px;
    border-color: #0c786b;
    border-radius: 5px;
    padding-left: 44px;
  }
  .asubs:visited{
    color: red;
  }
  


  input[type=text] {
    
    
    margin: 8px 0;
    display: inline-block;
    border-bottom: 1px solid #ccc;
    border-top: none;
    border-left: none;
    border-right: none; 
    border-radius: 4px;
    outline: none!important;
    
  }
  .offerimage{
    min-height: 200px;
  }



  .button1234 {
  display: inline-block;
  border-radius: 4px;
  background-color: #0c786b!important;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 16px;
  padding: 7px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button1234 .span1234 {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button1234 .span1234:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button1234:hover .span1234 {
  padding-right: 25px;
}

.button1234:hover .span1234:after {
  opacity: 1;
  right: 0;
}
.button-clicked{
  border:solid 1px;
  border-color: #0c786b;
  border-radius: 5px;
  padding-left: 44px;
}
.button-clicked:active{
  border:solid 1px;
  border-color: #0c786b;
  border-radius: 5px;
  padding-left: 44px;
}
.foodpreference{
  width: 44%;
  border-bottom: solid 1px;
  border-top: none;
  border-left: none;
  border-right: none;
  border-color: lightgrey;
  font-size: 18px;
  outline: none;
}
.subsimage{
  width: 100%;
}
.subsimage:hover{
   width: 100%
}
.grid 
{
  position: relative;
  clear: both;
  margin: 0 auto;
  max-width: 1000px;
  list-style: none;
  text-align: center;
}

/* Common style */
.grid figure {
  position: relative;
  float: left;
  overflow: hidden;
  margin: 10px 1%;
  min-width: 320px;
  max-width: 480px;
  max-height: 360px;
  width: 48%;
  height: auto;
  background: #3085a3;
  text-align: center;
  cursor: pointer;
}

.grid figure img {
  position: relative;
  display: block;
  min-height: 100%;
  max-width: 100%;
  opacity: 0.8;
}

.grid figure figcaption {
  padding: 2em;
  color: #fff;
  text-transform: uppercase;
  font-size: 1.25em;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.grid figure figcaption::before,
.grid figure figcaption::after {
  pointer-events: none;
}

.grid figure figcaption,
.grid figure figcaption > a {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

/* Anchor will cover the whole item by default */
/* For some effects it will show as a button */
.grid figure figcaption > a {
  z-index: 1000;
  text-indent: 200%;
  white-space: nowrap;
  font-size: 0;
  opacity: 0;
}

.grid figure h2 {
  word-spacing: -0.15em;
  font-weight: 300;
}

.grid figure h2 span {
  font-weight: 800;
}

.grid figure h2,
.grid figure p {
  margin: 0;
}

.grid figure p {
  letter-spacing: 1px;
  font-size: 68.5%;
}

/* Individual effects */

/*---------------*/
/***** Julia *****/
/*---------------*/

figure.effect-julia {
  background: #2f3238;
}

figure.effect-julia img {
  max-width: none;
  height: 400px;
  -webkit-transition: opacity 1s, -webkit-transform 1s;
  transition: opacity 1s, transform 1s;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

figure.effect-julia figcaption {
  text-align: left;
}

figure.effect-julia h2 {
  position: relative;
  padding: 0.5em 0;
}

figure.effect-julia p {
  display: inline-block;
  margin: 0 0 0.25em;
  padding: 0.4em 1em;
  background: rgba(255,255,255,0.9);
  color: #2f3238;
  text-transform: none;
  font-weight: 500;
  font-size: 75%;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(-360px,0,0);
  transform: translate3d(-360px,0,0);
}

figure.effect-julia p:first-child {
  -webkit-transition-delay: 0.15s;
  transition-delay: 0.15s;
}

figure.effect-julia p:nth-of-type(2) {
  -webkit-transition-delay: 0.1s;
  transition-delay: 0.1s;
}

figure.effect-julia p:nth-of-type(3) {
  -webkit-transition-delay: 0.05s;
  transition-delay: 0.05s;
}

figure.effect-julia:hover p:first-child {
  -webkit-transition-delay: 0s;
  transition-delay: 0s;
}

figure.effect-julia:hover p:nth-of-type(2) {
  -webkit-transition-delay: 0.05s;
  transition-delay: 0.05s;
}

figure.effect-julia:hover p:nth-of-type(3) {
  -webkit-transition-delay: 0.1s;
  transition-delay: 0.1s;
}

figure.effect-julia:hover img {
  opacity: 0.4;
  -webkit-transform: scale3d(1.1,1.1,1);
  transform: scale3d(1.1,1.1,1);
}

figure.effect-julia:hover p {
  opacity: 1;
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

/*-----------------*/
/***** Goliath *****/
/*-----------------*/

figure.effect-goliath {
  background: #df4e4e;
}

figure.effect-goliath img,
figure.effect-goliath h2 {
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
}

figure.effect-goliath img {
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

figure.effect-goliath h2,
figure.effect-goliath p {
  position: absolute;
  bottom: 0;
  left: 0;
  padding: 30px;
}

figure.effect-goliath p {
  text-transform: none;
  font-size: 90%;
  opacity: 0;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0,50px,0);
  transform: translate3d(0,50px,0);
}

figure.effect-goliath:hover img {
  -webkit-transform: translate3d(0,-80px,0);
  transform: translate3d(0,-80px,0);
}

figure.effect-goliath:hover h2 {
  -webkit-transform: translate3d(0,-100px,0);
  transform: translate3d(0,-100px,0);
}

figure.effect-goliath:hover p {
  opacity: 1;
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

/*-----------------*/
/***** Hera *****/
/*-----------------*/

figure.effect-hera {
  background: #303fa9;
}

figure.effect-hera h2 {
  font-size: 158.75%;
}

figure.effect-hera h2,
figure.effect-hera p {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(-50%,-50%,0);
  transform: translate3d(-50%,-50%,0);
  -webkit-transform-origin: 50%;
  transform-origin: 50%;
}

figure.effect-hera figcaption::before {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 200px;
  height: 200px;
  border: 2px solid #fff;
  content: '';
  opacity: 0;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,-45deg) scale3d(0,0,1);
  transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,-45deg) scale3d(0,0,1);
  -webkit-transform-origin: 50%;
  transform-origin: 50%;
}

figure.effect-hera p {
  width: 100px;
  text-transform: none;
  font-size: 121%;
  line-height: 2;
}

figure.effect-hera p a {
  color: #fff;
}

figure.effect-hera p a:hover,
figure.effect-hera p a:focus {
  opacity: 0.6;
}

figure.effect-hera p a i {
  opacity: 0;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
}

figure.effect-hera p a:first-child i {
  -webkit-transform: translate3d(-60px,-60px,0);
  transform: translate3d(-60px,-60px,0);
}

figure.effect-hera p a:nth-child(2) i {
  -webkit-transform: translate3d(60px,-60px,0);
  transform: translate3d(60px,-60px,0);
}

figure.effect-hera p a:nth-child(3) i {
  -webkit-transform: translate3d(-60px,60px,0);
  transform: translate3d(-60px,60px,0);
}

figure.effect-hera p a:nth-child(4) i {
  -webkit-transform: translate3d(60px,60px,0);
  transform: translate3d(60px,60px,0);
}

figure.effect-hera:hover figcaption::before {
  opacity: 1;
  -webkit-transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,-45deg) scale3d(1,1,1);
  transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,-45deg) scale3d(1,1,1);
}

figure.effect-hera:hover h2 {
  opacity: 0;
  -webkit-transform: translate3d(-50%,-50%,0) scale3d(0.8,0.8,1);
  transform: translate3d(-50%,-50%,0) scale3d(0.8,0.8,1);
}

figure.effect-hera:hover p i:empty {
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0); /* just because it's stronger than nth-child */
  opacity: 1;
}

/*-----------------*/
/***** Winston *****/
/*-----------------*/

figure.effect-winston {
  background: #162633;
  text-align: left;
}

figure.effect-winston img {
  -webkit-transition: opacity 0.45s;
  transition: opacity 0.45s;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

figure.effect-winston figcaption::before {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: url(../img/triangle.svg) no-repeat center center;
  background-size: 100% 100%;
  content: '';
  -webkit-transition: opacity 0.45s, -webkit-transform 0.45s;
  transition: opacity 0.45s, transform 0.45s;
  -webkit-transform: rotate3d(0,0,1,45deg);
  transform: rotate3d(0,0,1,45deg);
  -webkit-transform-origin: 0 100%;
  transform-origin: 0 100%;
}

figure.effect-winston h2 {
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
  -webkit-transform: translate3d(0,20px,0);
  transform: translate3d(0,20px,0);
}

figure.effect-winston p {
  position: absolute;
  right: 0;
  bottom: 0;
  padding: 0 1.5em 7% 0;
}

figure.effect-winston a {
  margin: 0 10px;
  color: #5d504f;
  font-size: 170%;
}

figure.effect-winston a:hover,
figure.effect-winston a:focus {
  color: #cc6055;
}

figure.effect-winston p a i {
  opacity: 0;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0,50px,0);
  transform: translate3d(0,50px,0);
}

figure.effect-winston:hover img {
  opacity: 0.6;
}

figure.effect-winston:hover h2 {
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

figure.effect-winston:hover figcaption::before {
  opacity: 0.7;
  -webkit-transform: rotate3d(0,0,1,20deg);
  transform: rotate3d(0,0,1,20deg);
}

figure.effect-winston:hover p i {
  opacity: 1;
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

figure.effect-winston:hover p a:nth-child(3) i {
  -webkit-transition-delay: 0.05s;
  transition-delay: 0.05s;
}

figure.effect-winston:hover p a:nth-child(2) i {
  -webkit-transition-delay: 0.1s;
  transition-delay: 0.1s;
}

figure.effect-winston:hover p a:first-child i {
  -webkit-transition-delay: 0.15s;
  transition-delay: 0.15s;
}

/*-----------------*/
/***** Selena *****/
/*-----------------*/

figure.effect-selena {
  background: #fff;
}

figure.effect-selena img {
  opacity: 0.95;
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
  -webkit-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
}

figure.effect-selena:hover img {
  -webkit-transform: scale3d(0.95,0.95,1);
  transform: scale3d(0.95,0.95,1);
}

figure.effect-selena h2 {
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
  -webkit-transform: translate3d(0,20px,0);
  transform: translate3d(0,20px,0);
}

figure.effect-selena p {
  opacity: 0;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: perspective(1000px) rotate3d(1,0,0,90deg);
  transform: perspective(1000px) rotate3d(1,0,0,90deg);
  -webkit-transform-origin: 50% 0%;
  transform-origin: 50% 0%;
}

figure.effect-selena:hover h2 {
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

figure.effect-selena:hover p {
  opacity: 1;
  -webkit-transform: perspective(1000px) rotate3d(1,0,0,0);
  transform: perspective(1000px) rotate3d(1,0,0,0);
}

/*-----------------*/
/***** Terry *****/
/*-----------------*/

figure.effect-terry {
  background: #34495e;
}

figure.effect-terry figcaption {
  padding: 1em;
}

figure.effect-terry figcaption::before,
figure.effect-terry figcaption::after {
  position: absolute;
  width: 200%;
  height: 200%;
  border-style: solid;
  border-color: #101010;
  content: '';
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
}

figure.effect-terry figcaption::before {
  right: 0;
  bottom: 0;
  border-width: 0 70px 60px 0;
  -webkit-transform: translate3d(70px,60px,0);
  transform: translate3d(70px,60px,0);
}

figure.effect-terry figcaption::after {
  top: 0;
  left: 0;
  border-width: 15px 0 0 15px;
  -webkit-transform: translate3d(-15px,-15px,0);
  transform: translate3d(-15px,-15px,0);
}

figure.effect-terry img,
figure.effect-terry p a {
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
}

figure.effect-terry img {
  opacity: 0.85;
}

figure.effect-terry h2 {
  position: absolute;
  bottom: 0;
  left: 0;
  padding: 0.4em 10px;
  width: 50%;
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
  -webkit-transform: translate3d(100%,0,0);
  transform: translate3d(100%,0,0);
}

@media screen and (max-width: 920px) {
  figure.effect-terry h2 {
    padding: 0.75em 10px;
    font-size: 120%;
  }
}

figure.effect-terry p {
  float: right;
  clear: both;
  text-align: left;
  text-transform: none;
  font-size: 111%;
}

figure.effect-terry p a {
  display: block;
  margin-bottom: 1em;
  color: #fff;
  opacity: 0;
  -webkit-transform: translate3d(90px,0,0);
  transform: translate3d(90px,0,0);
}

figure.effect-terry p a:hover,
figure.effect-terry p a:focus {
  color: #f3cf3f;
}

figure.effect-terry:hover figcaption::before,
figure.effect-terry:hover figcaption::after {
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

figure.effect-terry:hover img {
  opacity: 0.6;

}

figure.effect-terry:hover h2,
figure.effect-terry:hover p a {
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

figure.effect-terry:hover p a {
  opacity: 1;
}

figure.effect-terry:hover p a:first-child {
  -webkit-transition-delay: 0.025s;
  transition-delay: 0.025s;
}

figure.effect-terry:hover p a:nth-child(2) {
  -webkit-transition-delay: 0.05s;
  transition-delay: 0.05s;
}

figure.effect-terry:hover p a:nth-child(3) {
  -webkit-transition-delay: 0.075s;
  transition-delay: 0.075s;
}

figure.effect-terry:hover p a:nth-child(4) {
  -webkit-transition-delay: 0.1s;
  transition-delay: 0.1s;
}

/*-----------------*/
/***** Phoebe *****/
/*-----------------*/

figure.effect-phoebe {
  background: #675983;
}

figure.effect-phoebe img {
  opacity: 0.85;
  -webkit-transition: opacity 0.35s;
  transition: opacity 0.35s;
}

figure.effect-phoebe:hover img {
  opacity: 0.6;
}

figure.effect-phoebe figcaption::before {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: url(../img/triangle2.svg) no-repeat center center;
  background-size: 100% 100%;
  content: '';
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: scale3d(5,2.5,1);
  transform: scale3d(5,2.5,1);
  -webkit-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
}

figure.effect-phoebe:hover figcaption::before {
  opacity: 0.6;
  -webkit-transform: scale3d(1,1,1);
  transform: scale3d(1,1,1);
}

figure.effect-phoebe h2 {
  margin-top: 1em;
  -webkit-transition: transform 0.35s;
  transition: transform 0.35s;
  -webkit-transform: translate3d(0,40px,0);
  transform: translate3d(0,40px,0);
}

figure.effect-phoebe:hover h2 {
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

figure.effect-phoebe p a {
  color: #fff;
  font-size: 140%;
  opacity: 0;
  position: relative;
  display: inline-block;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
}

figure.effect-phoebe p a:first-child {
  -webkit-transform: translate3d(-60px,-60px,0);
  transform: translate3d(-60px,-60px,0);
}

figure.effect-phoebe p a:nth-child(2) {
  -webkit-transform: translate3d(0,60px,0);
  transform: translate3d(0,60px,0);
}

figure.effect-phoebe p a:nth-child(3) {
  -webkit-transform: translate3d(60px,-60px,0);
  transform: translate3d(60px,-60px,0);
}

figure.effect-phoebe:hover p a {
  opacity: 1;
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

/*-----------------*/
/***** Apollo *****/
/*-----------------*/

figure.effect-apollo {
  background: #3498db;
}

figure.effect-apollo img {
  opacity: 0.95;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: scale3d(1.05,1.05,1);
  transform: scale3d(1.05,1.05,1);
}

figure.effect-apollo figcaption::before {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(255,255,255,0.5);
  content: '';
  -webkit-transition: -webkit-transform 0.6s;
  transition: transform 0.6s;
  -webkit-transform: scale3d(1.9,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,-100%,0);
  transform: scale3d(1.9,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,-100%,0);
}

figure.effect-apollo p {
  position: absolute;
  right: 0;
  bottom: 0;
  margin: 3em;
  padding: 0 1em;
  max-width: 224px;
  border-right: 4px solid #fff;
  text-align: right;
  opacity: 0;
  -webkit-transition: opacity 0.35s;
  transition: opacity 0.35s;
}

figure.effect-apollo h2 {
  text-align: left;
}

figure.effect-apollo:hover img {
  opacity: 0.6;
  -webkit-transform: scale3d(1,1,1);
  transform: scale3d(1,1,1);
}

figure.effect-apollo:hover figcaption::before {
  -webkit-transform: scale3d(1.9,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,100%,0);
  transform: scale3d(1.9,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,100%,0);
}

figure.effect-apollo:hover p {
  opacity: 1;
  -webkit-transition-delay: 0.1s;
  transition-delay: 0.1s;
}

/*-----------------*/
/***** Kira *****/
/*-----------------*/

figure.effect-kira {
  background: #fff;
  text-align: left;
}

figure.effect-kira img {
  -webkit-transition: opacity 0.35s;
  transition: opacity 0.35s;
}

figure.effect-kira figcaption {
  z-index: 1;
}

figure.effect-kira p {
  padding: 2.25em 0.5em;
  font-weight: 600; 
  font-size: 100%;
  line-height: 1.5;
  opacity: 0;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0,-10px,0);
  transform: translate3d(0,-10px,0);
}

figure.effect-kira p a {
  margin: 0 0.5em;
  color: #101010;
}

figure.effect-kira p a:hover,
figure.effect-kira p a:focus {
  opacity: 0.6;
}

figure.effect-kira figcaption::before {
  position: absolute;
  top: 0;
  right: 2em;
  left: 2em;
  z-index: -1;
  height: 3.5em;
  background: #fff;
  content: '';
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0,4em,0) scale3d(1,0.023,1) ;
  transform: translate3d(0,4em,0) scale3d(1,0.023,1);
  -webkit-transform-origin: 50% 0;
  transform-origin: 50% 0;
}

figure.effect-kira:hover img {
  opacity: 0.5;
}

figure.effect-kira:hover p {
  opacity: 1;
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

figure.effect-kira:hover figcaption::before {
  opacity: 0.7;
  -webkit-transform: translate3d(0,5em,0) scale3d(1,1,1) ;
  transform: translate3d(0,5em,0) scale3d(1,1,1);
}

/*-----------------*/
/***** Steve *****/
/*-----------------*/

figure.effect-steve {
  z-index: auto;
  overflow: visible;
  background: #000;
}

figure.effect-steve:before,
figure.effect-steve h2:before {
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  width: 100%;
  height: 100%;
  background: #000;
  content: '';
  -webkit-transition: opacity 0.35s;
  transition: opacity 0.35s;
}

figure.effect-steve:before {
  box-shadow: 0 3px 30px rgba(0,0,0,0.8);
  opacity: 0;
}

figure.effect-steve figcaption {
  z-index: 1;
}

figure.effect-steve img {
  opacity: 1;
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
  -webkit-transform: perspective(1000px) translate3d(0,0,0);
  transform: perspective(1000px) translate3d(0,0,0);
}

figure.effect-steve h2,
figure.effect-steve p {
  background: #fff;
  color: #2d434e;
}

figure.effect-steve h2 {
  position: relative;
  margin-top: 2em;
  padding: 0.25em;
}

figure.effect-steve h2:before {
  box-shadow: 0 1px 10px rgba(0,0,0,0.5);
}

figure.effect-steve p {
  margin-top: 1em;
  padding: 0.5em;
  font-weight: 800;
  opacity: 0;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: scale3d(0.9,0.9,1);
  transform: scale3d(0.9,0.9,1);
}

figure.effect-steve:hover:before {
  opacity: 1;
}

figure.effect-steve:hover img {
  -webkit-transform: perspective(1000px) translate3d(0,0,21px);
  transform: perspective(1000px) translate3d(0,0,21px);
}

figure.effect-steve:hover h2:before {
  opacity: 0;
}

figure.effect-steve:hover p {
  opacity: 1;
  -webkit-transform: scale3d(1,1,1);
  transform: scale3d(1,1,1);
}

/*-----------------*/
/***** Moses *****/
/*-----------------*/

figure.effect-moses {
  background: -webkit-linear-gradient(-45deg, #EC65B7 0%,#05E0D8 100%);
  background: linear-gradient(-45deg, #EC65B7 0%,#05E0D8 100%);
}

figure.effect-moses img {
  opacity: 0.85;
  -webkit-transition: opacity 0.35s;
  transition: opacity 0.35s;
}

figure.effect-moses h2,
figure.effect-moses p {
  padding: 20px;
  width: 50%;
  height: 50%;
  border: 2px solid #fff;
}

figure.effect-moses h2 {
  padding: 20px;
  width: 50%;
  height: 50%;
  text-align: left;
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
  -webkit-transform: translate3d(10px,10px,0);
  transform: translate3d(10px,10px,0);
}

figure.effect-moses p {
  float: right;
  padding: 20px;
  text-align: right;
  opacity: 0;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(-50%,-50%,0);
  transform: translate3d(-50%,-50%,0);
}

figure.effect-moses:hover h2 {
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

figure.effect-moses:hover p {
  opacity: 1;
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

figure.effect-moses:hover img {
  opacity: 0.6;
}

/*---------------*/
/***** Jazz *****/
/*---------------*/

figure.effect-jazz {
  background: -webkit-linear-gradient(-45deg, #f3cf3f 0%,#f33f58 100%);
  background: linear-gradient(-45deg, #f3cf3f 0%,#f33f58 100%);
}

figure.effect-jazz img {
  opacity: 0.9;
}

figure.effect-jazz figcaption::after,
figure.effect-jazz img,
figure.effect-jazz p {
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
}

figure.effect-jazz figcaption::after {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-top: 1px solid #fff;
  border-bottom: 1px solid #fff;
  content: '';
  opacity: 0;
  -webkit-transform: rotate3d(0,0,1,45deg) scale3d(1,0,1);
  transform: rotate3d(0,0,1,45deg) scale3d(1,0,1);
  -webkit-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
}

figure.effect-jazz h2,
figure.effect-jazz p {
  opacity: 1;
  -webkit-transform: scale3d(0.8,0.8,1);
  transform: scale3d(0.8,0.8,1);
}

figure.effect-jazz h2 {
  padding-top: 26%;
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
}

figure.effect-jazz p {
  padding: 0.5em 2em;
  text-transform: none;
  font-size: 0.85em;
  opacity: 0;
}

figure.effect-jazz:hover img {
  opacity: 0.7;
  -webkit-transform: scale3d(1.05,1.05,1);
  transform: scale3d(1.05,1.05,1);
}

figure.effect-jazz:hover figcaption::after {
  opacity: 1;
  -webkit-transform: rotate3d(0,0,1,45deg) scale3d(1,1,1);
  transform: rotate3d(0,0,1,45deg) scale3d(1,1,1);
}

figure.effect-jazz:hover h2,
figure.effect-jazz:hover p {
  opacity: 1;
  -webkit-transform: scale3d(1,1,1);
  transform: scale3d(1,1,1);
}

/*---------------*/
/***** Ming *****/
/*---------------*/

figure.effect-ming {
  background: #030c17;
}

figure.effect-ming img {
  opacity: 0.9;
  -webkit-transition: opacity 0.35s;
  transition: opacity 0.35s;
}

figure.effect-ming figcaption::before {
  position: absolute;
  top: 30px;
  right: 30px;
  bottom: 30px;
  left: 30px;
  border: 2px solid #fff;
  box-shadow: 0 0 0 30px rgba(255,255,255,0.2);
  content: '';
  opacity: 0;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: scale3d(1.4,1.4,1);
  transform: scale3d(1.4,1.4,1);
}

figure.effect-ming h2 {
  margin: 20% 0 10px 0;
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
}

figure.effect-ming p {
  padding: 1em;
  opacity: 0;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: scale(1.5);
  transform: scale(1.5);
}

figure.effect-ming:hover h2 {
  -webkit-transform: scale(0.9);
  transform: scale(0.9);
}

figure.effect-ming:hover figcaption::before,
figure.effect-ming:hover p {
  opacity: 1;
  -webkit-transform: scale3d(1,1,1);
  transform: scale3d(1,1,1);
}

figure.effect-ming:hover figcaption {
  background-color: rgba(58,52,42,0);
}

figure.effect-ming:hover img {
  opacity: 0.4;
}

/*---------------*/
/***** Lexi *****/
/*---------------*/

figure.effect-lexi {
  background: -webkit-linear-gradient(-45deg, #000 0%,#fff 100%);
  background: linear-gradient(-45deg, #000 0%,#fff 100%);
}

figure.effect-lexi img {
  margin: -10px 0 0 -10px;
  max-width: none;
  width: -webkit-calc(100% + 10px);
  width: calc(100% + 10px);
  opacity: 0.9;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(10px,10px,0);
  transform: translate3d(10px,10px,0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

figure.effect-lexi figcaption::before,
figure.effect-lexi p {
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
}

figure.effect-lexi figcaption::before {
  position: absolute;
  right: -100px;
  bottom: -100px;
  width: 300px;
  height: 300px;
  border: 2px solid #fff;
  border-radius: 50%;
  box-shadow: 0 0 0 900px rgba(255,255,255,0.2);
  content: '';
  opacity: 0;
  -webkit-transform: scale3d(0.5,0.5,1);
  transform: scale3d(0.5,0.5,1);
  -webkit-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
}

figure.effect-lexi:hover img {
  opacity: 0.6;
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

figure.effect-lexi h2 {
  text-align: left;
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
  -webkit-transform: translate3d(5px,5px,0);
  transform: translate3d(5px,5px,0);
}

figure.effect-lexi p {
  position: absolute;
  right: 0;
  bottom: 0;
  padding: 0 1.5em 1.5em 0;
  width: 140px;
  text-align: right;
  opacity: 0;
  -webkit-transform: translate3d(20px,20px,0);
  transform: translate3d(20px,20px,0);
}

figure.effect-lexi:hover figcaption::before {
  opacity: 1;
  -webkit-transform: scale3d(1,1,1);
  transform: scale3d(1,1,1);
}

figure.effect-lexi:hover h2,
figure.effect-lexi:hover p {
  opacity: 1;
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

/*---------------*/
/***** Duke *****/
/*---------------*/

figure.effect-duke {
  background: -webkit-linear-gradient(-45deg, #34495e 0%,#cc6055 100%);
  background: linear-gradient(-45deg, #34495e 0%,#cc6055 100%);
}

figure.effect-duke img,
figure.effect-duke p {
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
}

figure.effect-duke:hover img {
  opacity: 0.1;
  -webkit-transform: scale3d(2,2,1);
  transform: scale3d(2,2,1);
}

figure.effect-duke h2 {
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
  -webkit-transform: scale3d(0.8,0.8,1);
  transform: scale3d(0.8,0.8,1);
  -webkit-transform-origin: 50% 100%;
  transform-origin: 50% 100%;
}

figure.effect-duke p {
  position: absolute;
  bottom: 0;
  left: 0;
  margin: 20px;
  padding: 30px;
  border: 2px solid #fff;
  text-transform: none;
  font-size: 90%;
  opacity: 0;
  -webkit-transform: scale3d(0.8,0.8,1);
  transform: scale3d(0.8,0.8,1);
  -webkit-transform-origin: 50% -100%;
  transform-origin: 50% -100%;
}

figure.effect-duke:hover h2,
figure.effect-duke:hover p {
  opacity: 1;
  -webkit-transform: scale3d(1,1,1);
  transform: scale3d(1,1,1);
}

/* Media queries */
@media screen and (max-width: 50em) {
  .content {
    padding: 0 10px;
    text-align: center;
  }
  .grid figure {
    display: inline-block;
    float: none;
    margin: 10px auto;
    width: 100%;
  }
}


.buttonsubs123{
  margin-left: 1%;
    margin-top: -4%;
    width: 101.5%;
    outline: none;
    background: transparent;
    color: black;
    border-top: none;
}
.buttonsubs123:hover{
  border-top: none;
  border-color: #0c786b;
  background-color: #0c786b;
  outline: none;
}
.buttonsubs123:focus{
  background-color: #0c786b;
}





 
</style>
<div>
  <img src="<?php echo HTTP_ROOT?>img/Kitchen1.jpg">
</div>


<section>
  <div class="row">
  <div class="col-md-12">
    
    
    <hr>
  </div>
</div>
<div class="row">
  <div class="col-md-2 subsborder" >
    <div class="spanhoversubs" id="buttonsubsonclick"><a class="asubs" href="<?php echo HTTP_ROOT.'/Homes/subscribe'?>"><h4><b>Basic Details</b></h4></a></div><br>
    <div class="spanhoversubs button-clicked" id="buttonsubsonclick"><a class="asubs" href="#"><h4><b>Select Meal</b></h4></a></div><br>
    <div class="spanhoversubs"><a class="asubs" href="<?php echo HTTP_ROOT.'/Homes/subscribe2'?>"><h4><b>Payment</b></h4></a></div><br>
  </div>
  <div class="col-md-9" style="padding-bottom: 30px;">
    <div class="row" style="padding-left: 127px;">
      <div class="col-md-6">
        <h6>Food Preference</h6>
        <select class="foodpreference">
           <option value="volvo">Vegetarian</option>
           <option value="saab">Non-Vegetarian</option>
        </select><br><br>
        
      </div>
      <div class="col-md-6">
        <h6>Meal Type</h6>
        <select class="foodpreference">
           <option value="breakfst">Breakfast</option>
           <option value="lunch">Lunch</option>
           <option value="dinner">Dinner</option>
        </select><br><br>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        
      </div>
      <div class="col-md-12">
        <div class="col-md-12 text-center">
          <h3>Select meal minimum 5 and maximum 7</h3>
        </div>
      </div>
      
      <div class="col-md-12">
        <hr>
      </div>
    </div>




    
    <div class="row">
      <div class="col-md-4">
        <span style="font-size: 16px"><b>Wednesday - 27 September 2017</b></span>
        <div class="grid">
          <figure class="effect-apollo">
            <img class="subsimage" src="<?php echo HTTP_ROOT?>img/dish/6853_V2.jpg" alt="img18"/>
            <figcaption>
              <p style="font-size: 16px!important">Jaipuri Bhindi, Kadhi Pakodhe, Steamed Rice, 3 Chapatis</p>
              
            </figcaption>     
          </figure>
         </div> 
         
      </div>
      
      <div class="col-md-4">
        <span style="font-size: 16px"><b>Thursday - 28 September 2017</b></span>
        <div class="grid">
          <figure class="effect-apollo">
            <img class="subsimage" src="<?php echo HTTP_ROOT?>img/dish/6853_V2.jpg" alt="img18"/>
            <figcaption>
              <p style="font-size: 16px!important">Jaipuri Bhindi, Kadhi Pakodhe, Steamed Rice, 3 Chapatis</p>
              
            </figcaption>     
          </figure>
         </div> 
         
      </div>
      
      <div class="col-md-4">
        <span style="font-size: 16px"><b>Friday - 29 September 2017</b></span>
        <div class="grid">
          <figure class="effect-apollo">
            <img class="subsimage" src="<?php echo HTTP_ROOT?>img/dish/6853_V2.jpg" alt="img18"/>
            <figcaption>
              <p style="font-size: 16px!important">Jaipuri Bhindi, Kadhi Pakodhe, Steamed Rice, 3 Chapatis</p>
              
            </figcaption>     
          </figure>
         </div> 
         
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
        <span style="font-size: 16px"><b>Saturday - 30 September 2017</b></span>
        <div class="grid">
          <figure class="effect-apollo">
            <img class="subsimage" src="<?php echo HTTP_ROOT?>img/dish/6853_V2.jpg" alt="img18"/>
            <figcaption>
              <p style="font-size: 16px!important">Jaipuri Bhindi, Kadhi Pakodhe, Steamed Rice, 3 Chapatis</p>
              
            </figcaption>     
          </figure>
         </div> 
         
      </div>
      <div class="col-md-4">
        <span style="font-size: 16px"><b>Sunday - 01 September 2017</b></span>
        <div class="grid">
          <figure class="effect-apollo">
            <img class="subsimage" src="<?php echo HTTP_ROOT?>img/dish/6853_V2.jpg" alt="img18"/>
            <figcaption>
              <p style="font-size: 16px!important">Jaipuri Bhindi, Kadhi Pakodhe, Steamed Rice, 3 Chapatis</p>
              
            </figcaption>     
          </figure>
         </div> 
         
      </div>
      <div class="col-md-4">
        <span style="font-size: 16px"><b>Monday - 02 September 2017</b></span>
        <div class="grid">
          <figure class="effect-apollo">
            <img class="subsimage" src="<?php echo HTTP_ROOT?>img/dish/6853_V2.jpg" alt="img18"/>
            <figcaption>
              <p style="font-size: 16px!important">Jaipuri Bhindi, Kadhi Pakodhe, Steamed Rice, 3 Chapatis</p>
              
            </figcaption>     
          </figure>
         </div> 
         
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
        <span style="font-size: 16px"><b>Tuesday - 03 September 2017</b></span>
        <div class="grid">
          <figure class="effect-apollo">
            <img class="subsimage" src="<?php echo HTTP_ROOT?>img/dish/6853_V2.jpg" alt="img18"/>
            <figcaption>
              <p style="font-size: 16px!important">Jaipuri Bhindi, Kadhi Pakodhe, Steamed Rice, 3 Chapatis</p>
              
            </figcaption>     
          </figure>
         </div> 
         
      </div>
      <div class="col-md-4">
        
      </div>
      <div class="col-md-4">
        
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-6">
        
      </div>
      <div class="col-md-6" style="padding-left: 90px;">
        <a href="<?php echo HTTP_ROOT.'/Homes/subscribe2'?>"><button class="btn btn-primary buttoncolor" style="vertical-align:middle; width: 20%"><span class="span1234"><b>Next </b></span></button></a>
      </div>
    </div>
  </div>
</div>
</section>


<script type="text/javascript">
  $("#buttonsubsonclick").click(function() {
  $("#buttonsubsonclick").addClass('button-clicked');
});
</script>













































<!-- <style type="text/css">
  body {
  margin: 0;
  font-family: inherit;
  font-size: 14px;
  
}

/*h3 {
  color: #fff;
  font-size: 24px;
  text-align: center;
  margin-top: 30px;
  padding-bottom: 30px;
  border-bottom: 1px solid #eee;
  margin-bottom: 30px;
  font-weight: 300;
}*/

.container {
  max-width: 970px;
}



.wrap {
  box-shadow: 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
  border-radius: 4px;
}

a:focus,
a:hover,
a:active {
  outline: 0;
  text-decoration: none;
}

.panel {
  border-width: 0 0 1px 0;
  border-style: solid;
  border-color: #fff;
  background: none;
  box-shadow: none;
}

.panel:last-child {
  border-bottom: none;
}

.panel-group > .panel:first-child .panel-heading {
  border-radius: 4px 4px 0 0;
}

.panel-group .panel {
  border-radius: 0;
}

.panel-group .panel + .panel {
  margin-top: 0;
}

.panel-heading {
  background-color: #009688;
  border-radius: 0;
  border: none;
  color: #fff;
  padding: 0;
}

.panel-title a {
  display: block;
  color: #fff;
  padding: 15px;
  position: relative;
  font-size: 16px;
  font-weight: 400;
}

.panel-body {
  background: #fff;
}

.panel:last-child .panel-body {
  border-radius: 0 0 4px 4px;
}

.panel:last-child .panel-heading {
  border-radius: 0 0 4px 4px;
  transition: border-radius 0.3s linear 0.2s;
}

.panel:last-child .panel-heading.active {
  border-radius: 0;
  transition: border-radius linear 0s;
}
/* #bs-collapse icon scale option */

.panel-heading a:before {
  position: absolute;
  font-family: 'Material Icons';
  right: 5px;
  top: 10px;
  font-size: 24px;
  transition: all 0.5s;
  transform: scale(1);
}

.panel-heading.active a:before {
  content: ' ';
  transition: all 0.5s;
  transform: scale(0);
}

#bs-collapse .panel-heading a:after {
  content: ' ';
  font-size: 24px;
  position: absolute;
  font-family: 'Material Icons';
  right: 5px;
  top: 10px;
  transform: scale(0);
  transition: all 0.5s;
}

#bs-collapse .panel-heading.active a:after {
  content: '\e909';
  transform: scale(1);
  transition: all 0.5s;
}
/* #accordion rotate icon option */

#accordion .panel-heading a:before {
  
  font-size: 24px;
  position: absolute;
  font-family: 'Material Icons';
  right: 5px;
  top: 10px;
  transform: rotate(180deg);
  transition: all 0.5s;
}

#accordion .panel-heading.active a:before {
  transform: rotate(0deg);
  transition: all 0.5s;
}

.paddingfull{
  padding: 100px 30px;
}
.textbox{
  border: solid 1px;
  border-color: lightgrey;
  padding: 7px 11px;
  border-radius: 5px;
  width: 70%;
}

#owl-demo .item{
  background: #29a79c;
  padding: 30px 0px;
  margin: 10px;
  color: #FFF;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  text-align: center;
}
.h3address{
  margin-left: 0px;
  margin-top: -30px;
}
.item:hover{
  border:solid 2px;
  border-color: #0c786b;
  cursor: pointer;
}



.buttonsubs {
  display: inline-block;
  border-radius: 4px;
  background-color: inherit;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 23px;
  padding: 24px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.buttonsubs .spansubs {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.buttonsubs .spansubs:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.buttonsubs:hover .spansubs {
  padding-right: 25px;
}

.buttonsubs:hover .spansubs:after {
  opacity: 1;
  right: 0;
}

.dropbtn 
{
  color: grey;
  font-size: 27px;
  cursor: pointer;
  width: 303px;
  margin-top: 0px;
}

.dropdown 
{
  position: relative;
  display: inline-block;
}

.dropdown-content 
{
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 303px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a 
{
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content 
{
  display: block;
}

.dropdown:hover .dropbtn 
{
  background-color: white;
}

.buttonsubs1
{
  background-color: white !important;
  border-color: #29a79c;
  color: black
}
.buttonsubs1:hover{
  background-color: #29a79c !important;
  border-color: #29a79c;
  color: white;
}
.buttonsubs1:after{
  background-color: #29a79c;
}

.buttonsubs1, select{
  color: black!important;
}

.buttonmenu{
  background-color: #29a79c!important;
  border-color: #29a79c!important;
}
.buttonmenu:hover{
  background-color: #29a79c!important;
  border-color: #29a79c!important;
}


</style>





<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css">
 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.css">
 

<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
 

<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>



<div class="row">
   <div class="col-md-4 paddingfull">
    <h2>HOW IT WORKS?</h2>
    <ol type="1">
      <h3><li>Choose your address</li></h3>
      <h3><li>Select your meal minimum 5, maximum 7</li></h3>
      <h3><li>Select time for delivery</li></h3>
      <h3><li>Pay</li></h3>
    </ol> 
    <h2><b>Easy & hassle free ordering</b></h2> 
  </div> 
  <div class="col-md-6 col-sm-12 paddingfull">
   
    <div class="panel-group wrap" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel">
        <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Basic Details
        </a>
      </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-3">
                    <h4><b>Name</b></h4>
                  </div>
                  <div class="col-md-9">
                    <h4><input class="textbox" type="text" name="name" value="<?php echo $uinfo['User']['name']; ?>" readonly></h4>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-3">
                    <h4><b>Mobile</b></h4>
                  </div>
                  <div class="col-md-9">
                    <h4><input class="textbox" type="text" name="mobile" value="<?php echo $uinfo['User']['contact_no']; ?>" readonly></h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
               <div class="form-group">
                 <h4><label for="comment">Write Your Address</label></h4>
                 <textarea class="form-control" rows="5" id="comment" placeholder="Write your address here"></textarea>
               </div>
              </div>
              <div class="col-md-6">
                
              </div>
              <div class="row">

                <div class="col-md-12">
                  <div id="owl-demo" class="owl-carousel owl-theme">
                    <div class="item">
                      <div class="h3address"><h3 class="text-center">Address 1</h3></div>
                      <span>C-164,<br>Beta-1,<br>Greater Noida,<br>U.P (201308)</span>
                    </div>
                    <div class="item">
                      <div class="h3address"><h3>Address 2</h3></div>
                      <span>C-164,<br>Sector-31,<br>Noida,<br>U.P (201301)</span>
                    </div>
                    <div class="item">
                      <button class="buttonsubs" style="vertical-align:middle"><span class="spansubs">Add address </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      

      <div class="panel">
        <div class="panel-heading" role="tab" id="headingTwo">
          <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Select Your Choice
        </a>
      </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="panel-body">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-5">
                    <h4><b>Food Preferences </b></h4>
                  </div>
                  <div class="col-md-7">
                    <h4>
                      <form>
                      <div class="form-group" style="margin-top: -23px;">
                        <label for="sel1"></label>
                        <select class="form-control" id="sel1">
                          <option>Vegetarian</option>
                          <option>Non-Vegetarian</option>
                        </select>
                      
                      </div>
                      </form>
                    </h4>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-5">
                    <h4><b>Meal Type</b></h4>
                  </div>
                  <div class="col-md-7">
                    <h4>
                      <form>
                      <div class="form-group" style="margin-top: -23px;">
                        <label for="sel1"></label>
                        <select class="form-control" id="sel1">
                          <option>Breakfast</option>
                          <option>Lunch</option>
                          <option>Dinner</option>
                        </select>
                      
                      </div>
                      </form>
                    </h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h4><b>Menu For 7 Days</b></h4>
                <div>
                  <div class="container">
                      <div class="row">
                        <div class="col-md-4">
                                <div class="well">
                                <h2 class="muted">Menu 1</h2>
                                <p><span class="label">POPULAR</span></p>
                                <div class="row">
                                  <div class="col-md-3">
                                    <b>Monday</b><br>
                                    <b>Tuesday</b><br>
                                    <b>Wednesday</b><br>
                                    <b>Thursday</b><br>
                                    <b>Friday</b><br>
                                    <b>Saturday</b><br>
                                    <b>Sunday</b><br>
                                  </div>
                                  <div class="col-md-9">
                                    <ul>
                                      <li>Omlette</li>
                                      <li>Toast</li>
                                      <li>Sausage links</li>
                                      <li>Turkey sausage</li>
                                      <li>Canadian bacon</li>
                                      <li>Sausage patties</li>
                                      <li>Sandwich</li>
                                    </ul>    
                                  </div>
                                </div>
                                      
                                <p>List goes from monday to sunday</p>
                                <hr>
                                <h3>₹600 / week</h3>
                                <hr>
                                <p><a class="btn btn-large btn-primary buttonmenu" href="#"><i class="icon-ok"></i> Select Menu</a></p>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="well">
                                <h2 class="text-warning">Menu 2</h2>
                                <p><span class="label label-success">POPULAR</span></p>
                                <div class="row">
                                  <div class="col-md-3">
                                    <b>Monday</b><br>
                                    <b>Tuesday</b><br>
                                    <b>Wednesday</b><br>
                                    <b>Thursday</b><br>
                                    <b>Friday</b><br>
                                    <b>Saturday</b><br>
                                    <b>Sunday</b><br>
                                  </div>
                                  <div class="col-md-9">
                                    <ul>
                                      <li>Omlette</li>
                                      <li>Toast</li>
                                      <li>Sausage links</li>
                                      <li>Turkey sausage</li>
                                      <li>Canadian bacon</li>
                                      <li>Sausage patties</li>
                                      <li>Sandwich</li>
                                    </ul>    
                                  </div>
                                </div>       
                                <p>List goes from monday to sunday</p>
                                <hr>
                                <h3>₹900 / week</h3>
                                <hr>
                                <p><a class="btn btn-success btn-large buttonmenu" href="#"><i class="icon-ok"></i> Select Menu</a></p>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="well">
                                <h2 class="text-info">Menu 3</h2>
                                <p><span class="label label-info">BUDGET</span></p>
                                <div class="row">
                                  <div class="col-md-3">
                                    <b>Monday</b><br>
                                    <b>Tuesday</b><br>
                                    <b>Wednesday</b><br>
                                    <b>Thursday</b><br>
                                    <b>Friday</b><br>
                                    <b>Saturday</b><br>
                                    <b>Sunday</b><br>
                                  </div>
                                  <div class="col-md-9">
                                    <ul>
                                      <li>Omlette</li>
                                      <li>Toast</li>
                                      <li>Sausage links</li>
                                      <li>Turkey sausage</li>
                                      <li>Canadian bacon</li>
                                      <li>Sausage patties</li>
                                      <li>Sandwich</li>
                                    </ul>    
                                  </div>
                                </div>         
                                <p>List goes from monday to sunday</p>
                                <hr>
                                <h3>₹450.99 / week</h3>
                                <hr>
                                  <p><a class="btn btn-large btn-primary buttonmenu" href="#"><i class="icon-ok"></i> Select Menu</a></p>
                              </div>
                            </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h4><b>Time Slots</b></h4>
                <div class="row">
                  <div class="col-md-3">
                    <button type="button" class="btn btn-primary buttonsubs1">09:00 am - 09:30 am</button>
                  </div>
                  <div class="col-md-3">
                    <button type="button" class="btn btn-primary buttonsubs1">09:30 am - 10:00 am</button>
                  </div>
                  <div class="col-md-3">
                    <button type="button" class="btn btn-primary buttonsubs1">10:00 am - 10:30 am</button>
                  </div>
                  <div class="col-md-3">
                    <button type="button" class="btn btn-primary buttonsubs1">10:30 am - 11:00 am</button>
                  </div>
                  <div class="col-md-3">
                    <button type="button" class="btn btn-primary buttonsubs1">11:00 am - 11:30 am</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      

      <div class="panel">
        <div class="panel-heading" role="tab" id="headingThree">
          <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Review Your Order
        </a>
      </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="panel-body">
            <div class="row">
              <div class="col-md-6">
                <h4><b>Your Order</b></h4>
                <img style="padding-left: 9%; padding-bottom: 6%;" src="<?php echo HTTP_ROOT?>img/subsbreak.png">
                <div class="col-md-8" style="margin-left: -15px;">
                <input style=" width: 100%!important; font-size: 18px" type="text" name="coupon" class="textbox" placeholder="Write coupon code here">
              </div>
              <div class="col-md-4" style="margin-top: -7px;">
                <button style="background-color: #29a79c; border-color: #29a79c" class="btn-primary btn"><span style=" font-size: 18px">Apply</span></button>
              </div>
              </div>
              
              <div class="col-md-6" style="border-left: solid 1px; border-color: lightgrey">
                
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <div class="col-md-12">
                          <h4><strong>Subtotal (Breakfast)</strong></h4>
                          <h4><div class="pull-right"><span>$</span><span>200.00</span></div></h4>
                          <hr>
                        </div>
                        <div class="col-md-12">
                          <h4><strong>Tax</strong></h4>
                          <h4><div class="pull-right"><span>$</span><span>200.00</span></div></h4>
                          <hr>
                        </div>
                        <div class="col-md-12">
                          <h4>Shipping
                          <div class="pull-right"><span>33</span></div></h4>
                        </div>
                        <div class="col-md-12">
                          <h4><strong>Order Total</strong>
                          <b><div class="pull-right"><span>$</span><span>150.00</span></div></b></h4>
                        </div>
                        <h4><button style="background-color: #29a79c!important; color: white!important; width: 40%!important; margin-top: 35px" type="button" class="btn btn-primary btn-lg btn-block buttonsubs1 pull-right">Checkout</button></h4>
                      </div>    
                    </div>
                    
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    

</div>
</div>
 -->


<!-- <script type="text/javascript">
    $(document).ready(function() {
  $('.collapse.in').prev('.panel-heading').addClass('active');
  $('#accordion, #bs-collapse')
    .on('show.bs.collapse', function(a) {
      $(a.target).prev('.panel-heading').addClass('active');
    })
    .on('hide.bs.collapse', function(a) {
      $(a.target).prev('.panel-heading').removeClass('active');
    });
});
</script>

<script type="text/javascript">
    $(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
    navigation : true
  });
 
  });
</script> -->