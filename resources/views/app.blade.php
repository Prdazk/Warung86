<!DOCTYPE html>

<!-- This code was generated using AnimaApp.com. 
This code is a high-fidelity prototype.
Get developer-friendly React or HTML/CSS code for this project at: https://projects.animaapp.com?utm_source=hosted-code 
12/09/2025 15:33:33 -->

<html><head><meta charset="utf-8"><meta name="viewport" content="width=1600, maximum-scale=1.0"><link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png"><meta name="og:type" content="website"><meta name="twitter:card" content="photo"><script id="anima-load-script" src="load.js"></script><script id="anima-hotspots-script" src="hotspots.js"></script><script id="anima-overrides-script" src="overrides.js"></script><script src="https://animaapp.s3.amazonaws.com/js/timeline.js"></script><style>
@import url("https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css");

@import url("https://fonts.googleapis.com/css?family=Merriweather:400,900,700|Roboto:500,700,400");

/* The following line is used to measure usage of this code. You can remove it if you want. */
@import url("https://px.animaapp.com/68c3a7bc8f125fe53556f11d.68c3a7bd8f125fe53556f120.TG3w2E9.hch.png");


.screen textarea:focus,
.screen input:focus {
  outline: none;
}

.screen * {
  -webkit-font-smoothing: antialiased;
  box-sizing: border-box;
}

.screen div {
  -webkit-text-size-adjust: none;
}

.component-wrapper a {
  display: contents;
  pointer-events: auto;
  text-decoration: none;
}

.component-wrapper * {
  -webkit-font-smoothing: antialiased;
  box-sizing: border-box;
  pointer-events: none;
}

.component-wrapper a *,
.component-wrapper input,
.component-wrapper video,
.component-wrapper iframe {
  pointer-events: auto;
}

.component-wrapper.not-ready,
.component-wrapper.not-ready * {
  visibility: hidden !important;
}

.screen a {
  display: contents;
  text-decoration: none;
}

.full-width-a {
  width: 100%;
}

.full-height-a {
  height: 100%;
}

.container-center-vertical {
  align-items: center;
  display: flex;
  flex-direction: row;
  height: 100%;
  pointer-events: none;
}

.container-center-vertical > * {
  flex-shrink: 0;
  pointer-events: auto;
}

.container-center-horizontal {
  display: flex;
  flex-direction: row;
  justify-content: center;
  pointer-events: none;
  width: 100%;
}

.container-center-horizontal > * {
  flex-shrink: 0;
  pointer-events: auto;
}

.auto-animated div {
  --z-index: -1;
  opacity: 0;
  position: absolute;
}

.auto-animated input {
  --z-index: -1;
  opacity: 0;
  position: absolute;
}

.auto-animated .container-center-vertical,
.auto-animated .container-center-horizontal {
  opacity: 1;
}

.overlay-base {
  display: none;
  height: 100%;
  opacity: 0;
  position: fixed;
  top: 0;
  width: 100%;
}

.overlay-base.animate-appear {
  align-items: center;
  animation: reveal 0.3s ease-in-out 1 normal forwards;
  display: flex;
  flex-direction: column;
  justify-content: center;
  opacity: 0;
}

.overlay-base.animate-disappear {
  animation: reveal 0.3s ease-in-out 1 reverse forwards;
  display: block;
  opacity: 1;
  pointer-events: none;
}

.overlay-base.animate-disappear * {
  pointer-events: none;
}

@keyframes reveal {
  from { opacity: 0 }
 to { opacity: 1 }
}

.animate-nodelay {
  animation-delay: 0s;
}

.align-self-flex-start {
  align-self: flex-start;
}

.align-self-flex-end {
  align-self: flex-end;
}

.align-self-flex-center {
  align-self: flex-center;
}

.valign-text-middle {
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.valign-text-bottom {
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
}

input:focus {
  outline: none;
}

.listeners-active,
.listeners-active * {
  pointer-events: auto;
}

.hidden,
.hidden * {
  pointer-events: none;
  visibility: hidden;
}

.smart-layers-pointers,
.smart-layers-pointers * {
  pointer-events: auto;
  visibility: visible;
}

.listeners-active-click,
.listeners-active-click * {
  cursor: pointer;
}

* {
  box-sizing: border-box;
}
:root { 
  --black: #000000;
  --chicago: #605c59;
  --chicago-2: #5f5b58;
  --cultured-pearl: #f5f5f5;
  --emperor: #534a43;
  --rhino: #283a61;
  --stratos: #000538;
  --white: #ffffff;
 
  --font-size-l: 18px;
  --font-size-m: 16px;
  --font-size-s: 14px;
  --font-size-xl: 20px;
  --font-size-xxl: 24px;
  --font-size-xxxl: 48px;
 
  --font-family-merriweather: "Merriweather", Helvetica;
  --font-family-roboto: "Roboto", Helvetica;
}
.roboto-bold-chicago-16px {
  color: var(--chicago);
  font-family: var(--font-family-roboto);
  font-size: var(--font-size-m);
  font-style: normal;
  font-weight: 700;
}

.merriweather-normal-emperor-14px {
  color: var(--emperor);
  font-family: var(--font-family-merriweather);
  font-size: var(--font-size-s);
  font-style: normal;
  font-weight: 400;
}

.merriweather-normal-black-14px {
  color: var(--black);
  font-family: var(--font-family-merriweather);
  font-size: var(--font-size-s);
  font-style: normal;
  font-weight: 400;
}

.roboto-normal-chicago-18px {
  color: var(--chicago-2);
  font-family: var(--font-family-roboto);
  font-size: var(--font-size-l);
  font-style: normal;
  font-weight: 400;
}

:root {
}


/* screen - frame-1 */

.frame-1 {
  background-color: transparent;
  height: 960.0px;
  overflow: hidden;
  overflow-x: hidden;
  position: relative;
  width: 1600px;
}

.frame-1 .group-5-VxPVnb {
  background-color: transparent;
  height: 1903px;
  left: 0px;
  position: relative;
  top: 0px;
  width: 1600px;
}

.frame-1 .background-OxrO5u {
  background-color: var(--white);
  height: 1761px;
  width: 1600px;
}

.frame-1 .footer-OxrO5u {
  background-color: transparent;
  height: 142px;
  left: 0px;
  position: absolute;
  top: 1761px;
  width: 1602px;
}

.frame-1 .rectangle-7-0cTpxk {
  background-color: var(--cultured-pearl);
  height: 142px;
  left: 0px;
  position: absolute;
  top: 0px;
  width: 1600px;
}

.frame-1 .footer-nav-0cTpxk {
  background-color: transparent;
  height: 22px;
  left: 678px;
  position: absolute;
  top: 36px;
  width: 249px;
}

.frame-1 .about-NVLWGl {
  left: 0px;
  line-height: 22.4px;
  text-align: center;
}

.frame-1 .privacy-policy-NVLWGl {
  background-color: transparent;
  height: auto;
  left: 67px;
  letter-spacing: 0.00px;
  line-height: 22.4px;
  position: absolute;
  text-align: center;
  top: 0px;
  white-space: nowrap;
  width: auto;
}

.frame-1 .contact-NVLWGl {
  left: 189px;
  line-height: 22.4px;
  text-align: center;
}

.frame-1 .copyright-2021-food-0cTpxk {
  background-color: transparent;
  color: #3d3d3d;
  font-family: var(--font-family-merriweather);
  font-size: var(--font-size-s);
  font-style: normal;
  font-weight: 700;
  height: auto;
  left: 606px;
  letter-spacing: 0.00px;
  line-height: 22.4px;
  position: absolute;
  text-align: center;
  top: 84px;
  white-space: nowrap;
  width: auto;
}

.frame-1 .group-6-OxrO5u {
  background-color: transparent;
  height: 1661px;
  left: 250px;
  position: absolute;
  top: 60px;
  width: 1104px;
}

.frame-1 .widgets-mMoHlU {
  background-color: transparent;
  height: 376px;
  left: 0px;
  position: absolute;
  top: 1285px;
  width: 782px;
}

.frame-1 .popular-posts-cmUf42 {
  height: 181px;
  left: 462px;
  width: 328px;
}

.frame-1 .popular-posts-lC0H3n {
  color: var(--black);
  font-family: var(--font-family-roboto);
  font-size: var(--font-size-s);
  font-style: normal;
  font-weight: 500;
  height: auto;
  left: 0px;
  letter-spacing: 0.00px;
  line-height: 22.4px;
  text-align: center;
  white-space: nowrap;
  width: auto;
}

.frame-1 .how-to-have-your-cak-lC0H3n {
  background-color: transparent;
  height: auto;
  left: 0px;
  letter-spacing: 0.00px;
  line-height: 22.4px;
  position: absolute;
  text-align: left;
  top: 49px;
  width: 320px;
}

.frame-1 .my-grandmas-30-year-old-recipe-lC0H3n {
  background-color: transparent;
  height: auto;
  left: 0px;
  letter-spacing: 0.00px;
  line-height: 22.4px;
  position: absolute;
  text-align: left;
  top: 115px;
  white-space: nowrap;
  width: auto;
}

.frame-1 .what-i-learned-about-lC0H3n {
  background-color: transparent;
  height: auto;
  left: 0px;
  letter-spacing: 0.00px;
  line-height: 22.4px;
  position: absolute;
  text-align: left;
  top: 159px;
  width: 320px;
}

.frame-1 .newsletter-cmUf42 {
  background-color: transparent;
  height: 372px;
  left: 0px;
  position: absolute;
  top: 4px;
  width: 386px;
}

.frame-1 .background-xZ2cIB {
  background-color: var(--rhino);
  border-radius: 5px;
  height: 372px;
  width: 382px;
}

.frame-1 .button-xZ2cIB {
  background-color: transparent;
  height: 47px;
  left: 49px;
  position: absolute;
  top: 287px;
  width: 101px;
}

.frame-1 .rectangle-6-kTlJUo {
  background-color: var(--stratos);
  border-radius: 3px;
  height: 47px;
  left: 0px;
  position: absolute;
  top: 0px;
  width: 99px;
}

.frame-1 .sign-up-kTlJUo {
  background-color: transparent;
  color: var(--white);
  font-family: var(--font-family-roboto);
  font-size: var(--font-size-l);
  font-style: normal;
  font-weight: 500;
  height: auto;
  left: 18px;
  letter-spacing: 0.00px;
  line-height: 28.8px;
  position: absolute;
  text-align: center;
  top: 9px;
  white-space: nowrap;
  width: auto;
}

.frame-1 .input-xZ2cIB {
  background-color: transparent;
  height: 52px;
  left: 49px;
  position: absolute;
  top: 212px;
  width: 290px;
}

.frame-1 .rectangle-5-fHtJyx {
  background-color: var(--white);
  border-radius: 3px;
  height: 52px;
  left: 0px;
  position: absolute;
  top: 0px;
  width: 288px;
}

.frame-1 .email-fHtJyx {
  background-color: transparent;
  color: var(--chicago);
  font-family: var(--font-family-roboto);
  font-size: var(--font-size-l);
  font-style: normal;
  font-weight: 500;
  height: auto;
  left: 15px;
  letter-spacing: 0.00px;
  line-height: 28.8px;
  position: absolute;
  text-align: center;
  top: 11px;
  white-space: nowrap;
  width: auto;
}

.frame-1 .get-weekly-food-news-xZ2cIB {
  background-color: transparent;
  color: #dfe6ff;
  font-family: var(--font-family-roboto);
  font-size: var(--font-size-l);
  font-style: normal;
  font-weight: 500;
  height: auto;
  left: 27px;
  letter-spacing: 0.00px;
  line-height: 28.8px;
  position: absolute;
  text-align: center;
  top: 127px;
  width: 328px;
}

.frame-1 .subscribe-to-our-newsletter-xZ2cIB {
  background-color: transparent;
  color: var(--white);
  font-family: var(--font-family-merriweather);
  font-size: var(--font-size-xxl);
  font-style: normal;
  font-weight: 900;
  height: auto;
  left: 96px;
  letter-spacing: 0.00px;
  line-height: 38.4px;
  position: absolute;
  text-align: center;
  top: 38px;
  width: auto;
}

.frame-1 .pageination-mMoHlU {
  background-color: transparent;
  height: 42px;
  left: 386px;
  position: absolute;
  top: 1175px;
  width: 329px;
}

.frame-1 .page-number-BxrI0E {
  left: 0px;
}

.frame-1 .ellipse-2-Cu8CUW {
  background-color: var(--stratos);
}

.frame-1 .x1-Cu8CUW {
  background-color: transparent;
  color: var(--white);
  font-family: var(--font-family-roboto);
  font-size: var(--font-size-m);
  font-style: normal;
  font-weight: 700;
  height: auto;
  left: 16px;
  letter-spacing: 0.00px;
  line-height: 25.6px;
  position: absolute;
  text-align: left;
  top: 8px;
  white-space: nowrap;
  width: auto;
}

.frame-1 .page-number-rFLXvS {
  left: 62px;
}

.frame-1 .ellipse-2-Wd3PqF {
  background-color: var(--cultured-pearl);
}

.frame-1 .x2-Wd3PqF {
  background-color: transparent;
  height: auto;
  left: 16px;
  letter-spacing: 0.00px;
  line-height: 25.6px;
  position: absolute;
  text-align: left;
  top: 8px;
  white-space: nowrap;
  width: auto;
}

.frame-1 .page-number-mDUDva {
  left: 124px;
}

.frame-1 .ellipse-2-9PMd1B {
  background-color: var(--cultured-pearl);
}

.frame-1 .x3-9PMd1B {
  background-color: transparent;
  height: auto;
  left: 16px;
  letter-spacing: 0.00px;
  line-height: 25.6px;
  position: absolute;
  text-align: left;
  top: 8px;
  white-space: nowrap;
  width: auto;
}

.frame-1 .page-number-mZyFuk {
  left: 186px;
}

.frame-1 .ellipse-2-Iz6qwz {
  background-color: var(--cultured-pearl);
}

.frame-1 .x4-Iz6qwz {
  background-color: transparent;
  height: auto;
  left: 16px;
  letter-spacing: 0.00px;
  line-height: 25.6px;
  position: absolute;
  text-align: left;
  top: 8px;
  white-space: nowrap;
  width: auto;
}

.frame-1 .x-BxrI0E {
  background-color: transparent;
  color: #686461;
  font-family: var(--font-family-roboto);
  font-size: var(--font-size-xxl);
  font-style: normal;
  font-weight: 700;
  height: auto;
  left: 246px;
  letter-spacing: 0.00px;
  line-height: 38.4px;
  position: absolute;
  text-align: left;
  top: 4px;
  white-space: nowrap;
  width: auto;
}

.frame-1 .page-number-URDZH5 {
  left: 285px;
}

.frame-1 .ellipse-2-xxpQtz {
  background-color: var(--cultured-pearl);
}

.frame-1 .x13-xxpQtz {
  background-color: transparent;
  height: auto;
  left: 12px;
  letter-spacing: 0.00px;
  line-height: 25.6px;
  position: absolute;
  text-align: left;
  top: 8px;
  white-space: nowrap;
  width: auto;
}

.frame-1 .blog-post-2-mMoHlU {
  background-color: transparent;
  height: 603px;
  left: 590px;
  position: absolute;
  top: 420px;
  width: 518px;
}

.frame-1 .image-2-NA5iO6 {
  background-color: transparent;
  height: 278px;
  left: 0px;
  object-fit: cover;
  position: absolute;
  top: 0px;
  width: 510px;
}

.frame-1 .image-3-0APLvu {
  background-color: transparent;
  height: 42px;
  left: 720px;
  object-fit: cover;
  position: absolute;
  top: 953px;
  width: 42px;
}

.frame-1 .rectangle-3-NA5iO6 {
  background-color: var(--rhino);
  border-radius: 3px;
  height: 26px;
  left: 0px;
  position: absolute;
  top: 299px;
  width: 112px;
}

.frame-1 .food-theory-NA5iO6 {
  background-color: transparent;
  color: #ffffffd9;
  font-family: var(--font-family-roboto);
  font-size: var(--font-size-s);
  font-style: normal;
  font-weight: 500;
  height: auto;
  left: 17px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  top: 304px;
  white-space: nowrap;
  width: auto;
}

.frame-1 .aug-1-2021-7-min-read-NA5iO6 {
  background-color: transparent;
  color: #505050;
  font-family: var(--font-family-merriweather);
  font-size: var(--font-size-s);
  font-style: normal;
  font-weight: 400;
  height: auto;
  left: 0px;
  letter-spacing: 0.00px;
  line-height: 22.4px;
  position: absolute;
  text-align: left;
  top: 407px;
  white-space: nowrap;
  width: auto;
}

.frame-1 .why-you-should-never-NA5iO6 {
  background-color: transparent;
  color: var(--black);
  font-family: var(--font-family-merriweather);
  font-size: var(--font-size-xxl);
  font-style: normal;
  font-weight: 700;
  height: auto;
  left: 0px;
  letter-spacing: 0.00px;
  line-height: 33.6px;
  position: absolute;
  text-align: left;
  top: 333px;
  width: 510px;
}

.frame-1 .lorem-ipsum-dolor-si-NA5iO6 {
  top: 440px;
}

.frame-1 .blog-post-1-mMoHlU {
  background-color: transparent;
  height: 603px;
  left: 0px;
  position: absolute;
  top: 420px;
  width: 518px;
}

.frame-1 .image-1-bdsINx {
  background-color: transparent;
  height: 278px;
  left: 0px;
  object-fit: cover;
  position: absolute;
  top: 0px;
  width: 510px;
}

.frame-1 .image-4-9dfRAj {
  background-color: transparent;
  height: 42px;
  left: 720px;
  object-fit: cover;
  position: absolute;
  top: 953px;
  width: 42px;
}

.frame-1 .rectangle-2-bdsINx {
  background-color: var(--rhino);
  border-radius: 3px;
  height: 26px;
  left: 0px;
  position: absolute;
  top: 299px;
  width: 73px;
}

.frame-1 .travel-bdsINx {
  background-color: transparent;
  color: #ffffffd9;
  font-family: var(--font-family-roboto);
  font-size: var(--font-size-s);
  font-style: normal;
  font-weight: 500;
  height: auto;
  left: 17px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  top: 304px;
  white-space: nowrap;
  width: auto;
}

.frame-1 .jun-21-2021-11-min-read-bdsINx {
  background-color: transparent;
  color: #505050;
  font-family: var(--font-family-merriweather);
  font-size: var(--font-size-s);
  font-style: normal;
  font-weight: 400;
  height: auto;
  left: 0px;
  letter-spacing: 0.00px;
  line-height: 22.4px;
  position: absolute;
  text-align: left;
  top: 407px;
  white-space: nowrap;
  width: auto;
}

.frame-1 .what-traveling-greec-bdsINx {
  background-color: transparent;
  color: var(--black);
  font-family: var(--font-family-merriweather);
  font-size: var(--font-size-xxl);
  font-style: normal;
  font-weight: 700;
  height: auto;
  left: 0px;
  letter-spacing: 0.00px;
  line-height: 33.6px;
  position: absolute;
  text-align: left;
  top: 333px;
  width: 510px;
}

.frame-1 .lorem-ipsum-dolor-si-bdsINx {
  top: 444px;
}

.frame-1 .search-bar-mMoHlU {
  background-color: transparent;
  height: 58px;
  left: 335px;
  position: absolute;
  top: 282px;
  width: 432px;
}

.frame-1 .rectangle-1-xMmb8d {
  background-color: #fdfdfd;
  border: 1px solid;
  border-color: #dddddd;
  border-radius: 5px;
  height: 58px;
  left: 0px;
  position: absolute;
  top: 0px;
  width: 430px;
}

.frame-1 .search-for-articles-xMmb8d {
  background-color: transparent;
  color: #5e5e5e;
  font-family: var(--font-family-merriweather);
  font-size: var(--font-size-l);
  font-style: normal;
  font-weight: 400;
  height: auto;
  left: 28px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  top: 18px;
  width: auto;
}

.frame-1 .union-xMmb8d {
  background-color: transparent;
  height: 19px;
  left: 387px;
  position: absolute;
  top: 20px;
  width: 19px;
}

.frame-1 .a-blog-about-food-ex-mMoHlU {
  background-color: transparent;
  color: var(--chicago);
  font-family: var(--font-family-roboto);
  font-size: var(--font-size-xl);
  font-style: normal;
  font-weight: 400;
  height: auto;
  left: 274px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: center;
  top: 203px;
  width: 551px;
}

.frame-1 .title-mMoHlU {
  background-color: transparent;
  color: var(--stratos);
  font-family: var(--font-family-merriweather);
  font-size: var(--font-size-xxxl);
  font-style: normal;
  font-weight: 900;
  height: auto;
  left: 302px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  top: 133px;
  width: auto;
}

.frame-1 .header-mMoHlU {
  background-color: transparent;
  height: 30px;
  left: 0px;
  position: absolute;
  top: 0px;
  width: 1102px;
}

.frame-1 .food-ninja-uXWtWs {
  background-color: transparent;
  color: var(--stratos);
  font-family: var(--font-family-merriweather);
  font-size: var(--font-size-xxl);
  font-style: normal;
  font-weight: 900;
  height: auto;
  left: 0px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  top: 0px;
  width: auto;
}

.frame-1 .nav-uXWtWs {
  background-color: transparent;
  height: 21px;
  left: 913px;
  position: absolute;
  top: 4px;
  width: 193px;
}

.frame-1 .blog-yWC395 {
  background-color: transparent;
  height: auto;
  left: 0px;
  letter-spacing: 0.00px;
  line-height: normal;
  position: absolute;
  text-align: left;
  top: 0px;
  white-space: nowrap;
  width: auto;
}

.frame-1 .about-yWC395 {
  left: 56px;
  line-height: normal;
  text-align: left;
}

.frame-1 .contact-yWC395 {
  left: 124px;
  line-height: normal;
  text-align: left;
}

.frame-1 .about {
  background-color: transparent;
  height: auto;
  letter-spacing: 0.00px;
  position: absolute;
  top: 0px;
  white-space: nowrap;
  width: auto;
}

.frame-1 .author {
  background-color: transparent;
  height: 42px;
  left: 0px;
  position: absolute;
  top: 561px;
  width: 176px;
}

.frame-1 .background {
  left: 0px;
  position: absolute;
  top: 0px;
}

.frame-1 .contact {
  background-color: transparent;
  height: auto;
  letter-spacing: 0.00px;
  position: absolute;
  top: 0px;
  white-space: nowrap;
  width: auto;
}

.frame-1 .ellipse-2 {
  border-radius: 21px;
  height: 42px;
  left: 0px;
  position: absolute;
  top: 0px;
  width: 42px;
}

.frame-1 .george-costanza {
  background-color: transparent;
  color: var(--black);
  font-family: var(--font-family-merriweather);
  font-size: var(--font-size-s);
  font-style: normal;
  font-weight: 700;
  height: auto;
  left: 56px;
  letter-spacing: 0.00px;
  line-height: 22.4px;
  position: absolute;
  text-align: left;
  top: 10px;
  white-space: nowrap;
  width: auto;
}

.frame-1 .lorem-ipsum-dolor-si {
  background-color: transparent;
  color: #424242;
  font-family: var(--font-family-roboto);
  font-size: var(--font-size-m);
  font-style: normal;
  font-weight: 400;
  height: auto;
  left: 0px;
  letter-spacing: 0.00px;
  line-height: 25.6px;
  position: absolute;
  text-align: left;
  width: 510px;
}

.frame-1 .page-number {
  background-color: transparent;
  height: 42px;
  position: absolute;
  top: 0px;
  width: 44px;
}

.frame-1 .popular-posts {
  background-color: transparent;
  position: absolute;
  top: 0px;
}
</style></head><body style="margin: 0;"><input type="hidden" id="anPageName" name="page" value="frame-1"><div class="container-center-horizontal"><div class="frame-1 screen " data-id="404:535"><div class="group-5-VxPVnb" data-id="404:458"><div class="background-OxrO5u background" data-id="404:459"></div><footer class="footer-OxrO5u" data-id="404:460"><div class="rectangle-7-0cTpxk" data-id="404:461"></div><div class="footer-nav-0cTpxk" data-id="404:462"><div class="about-NVLWGl about merriweather-normal-emperor-14px" data-id="404:463">About</div><div class="privacy-policy-NVLWGl merriweather-normal-emperor-14px" data-id="404:464">Privacy Policy</div><div class="contact-NVLWGl contact merriweather-normal-emperor-14px" data-id="404:465">Contact</div></div><p class="copyright-2021-food-0cTpxk" data-id="404:466">Copyright © 2021 Food Ninja Blog. All Rights Reserved.</p></footer><div class="group-6-OxrO5u" data-id="404:534"><div class="widgets-mMoHlU" data-id="404:467"><div class="popular-posts-cmUf42 popular-posts" data-id="404:468"><div class="popular-posts-lC0H3n popular-posts" data-id="404:469">POPULAR POSTS</div><p class="how-to-have-your-cak-lC0H3n merriweather-normal-black-14px" data-id="404:470">How To Have Your Cake and Eat It Too: The Way of The Chicken Man</p><div class="my-grandmas-30-year-old-recipe-lC0H3n merriweather-normal-black-14px" data-id="404:471">My Grandma’s 30-year-old Recipe</div><p class="what-i-learned-about-lC0H3n merriweather-normal-black-14px" data-id="404:472">What I learned about cooking from Ratatoulie</p></div><div class="newsletter-cmUf42" data-id="404:473"><div class="background-xZ2cIB background" data-id="404:474"></div><div class="button-xZ2cIB" data-id="404:475"><div class="rectangle-6-kTlJUo" data-id="404:476"></div><div class="sign-up-kTlJUo" data-id="404:477">Sign Up</div></div><div class="input-xZ2cIB" data-id="404:478"><div class="rectangle-5-fHtJyx" data-id="404:479"></div><div class="email-fHtJyx" data-id="404:480">Email</div></div><p class="get-weekly-food-news-xZ2cIB" data-id="404:481">Get weekly food news, articles, and videos delivered to your inbox.</p><div class="subscribe-to-our-newsletter-xZ2cIB" data-id="404:482">Subscribe To<br>Our Newsletter</div></div></div><div class="pageination-mMoHlU" data-id="404:483"><div class="page-number-BxrI0E page-number" data-id="404:484"><div class="ellipse-2-Cu8CUW ellipse-2" data-id="404:485"></div><div class="x1-Cu8CUW" data-id="404:486">1</div></div><div class="page-number-rFLXvS page-number" data-id="404:487"><div class="ellipse-2-Wd3PqF ellipse-2" data-id="404:488"></div><div class="x2-Wd3PqF roboto-bold-chicago-16px" data-id="404:489">2</div></div><div class="page-number-mDUDva page-number" data-id="404:490"><div class="ellipse-2-9PMd1B ellipse-2" data-id="404:491"></div><div class="x3-9PMd1B roboto-bold-chicago-16px" data-id="404:492">3</div></div><div class="page-number-mZyFuk page-number" data-id="404:493"><div class="ellipse-2-Iz6qwz ellipse-2" data-id="404:494"></div><div class="x4-Iz6qwz roboto-bold-chicago-16px" data-id="404:495">4</div></div><div class="x-BxrI0E" data-id="404:496">...</div><div class="page-number-URDZH5 page-number" data-id="404:497"><div class="ellipse-2-xxpQtz ellipse-2" data-id="404:498"></div><div class="x13-xxpQtz roboto-bold-chicago-16px" data-id="404:499">13</div></div></div><div class="blog-post-2-mMoHlU" data-id="404:500"><img class="image-2-NA5iO6" data-id="404:501" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/68c3a7be8f125fe53556f122/releases/68c3d2d2d66721c4168538ed/img/image-2.png" alt="image 2"><div class="author" data-id="404:502"><div class="george-costanza" data-id="404:503">George Costanza</div><img class="image-3-0APLvu" data-id="404:504" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/68c3a7be8f125fe53556f122/releases/68c3d2d2d66721c4168538ed/img/image-3@2x.png" alt="image 3"></div><div class="rectangle-3-NA5iO6" data-id="404:505"></div><div class="food-theory-NA5iO6" data-id="404:506">Food Theory</div><p class="aug-1-2021-7-min-read-NA5iO6" data-id="404:507">Aug 1, 2021 • 7 min read</p><p class="why-you-should-never-NA5iO6" data-id="404:508">Why You Should Never Order 12 Chicken Nuggets and Fries</p><p class="lorem-ipsum-dolor-si-NA5iO6 lorem-ipsum-dolor-si" data-id="404:509">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Diam mollis lectus vitae nulla malesuada amet purus sed. A condimentum tempus a egestas sodales diam cras. Ligula a varius tempus ac amet, vel lectus sed. Urna sit Eget.</p></div><div class="blog-post-1-mMoHlU" data-id="404:510"><img class="image-1-bdsINx" data-id="404:511" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/68c3a7be8f125fe53556f122/releases/68c3d2d2d66721c4168538ed/img/image-1.png" alt="image 1"><div class="author" data-id="404:512"><div class="george-costanza" data-id="404:513">George Costanza</div><img class="image-4-9dfRAj" data-id="404:514" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/68c3a7be8f125fe53556f122/releases/68c3d2d2d66721c4168538ed/img/image-3@2x.png" alt="image 4"></div><div class="rectangle-2-bdsINx" data-id="404:515"></div><div class="travel-bdsINx" data-id="404:516">Travel</div><p class="jun-21-2021-11-min-read-bdsINx" data-id="404:517">Jun 21, 2021 • 11 min read</p><p class="what-traveling-greec-bdsINx" data-id="404:518">What Traveling Greece For 2 Weeks Taught Me About Life</p><p class="lorem-ipsum-dolor-si-bdsINx lorem-ipsum-dolor-si" data-id="404:519">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Diam mollis lectus vitae nulla malesuada amet purus sed. A condimentum tempus a egestas sodales diam cras.</p></div><div class="search-bar-mMoHlU" data-id="404:520"><div class="rectangle-1-xMmb8d" data-id="404:521"></div><div class="search-for-articles-xMmb8d" data-id="404:522">Search for articles</div><img class="union-xMmb8d" data-id="404:523" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" anima-src="https://cdn.animaapp.com/projects/68c3a7be8f125fe53556f122/releases/68c3d2d2d66721c4168538ed/img/union.svg" alt="Union"></div><p class="a-blog-about-food-ex-mMoHlU" data-id="404:526">A blog about food, experiences, and recipes.</p><h1 class="title-mMoHlU" data-id="404:527">The Food Ninja Blog</h1><header class="header-mMoHlU" data-id="404:528"><div class="food-ninja-uXWtWs" data-id="404:529">Food Ninja</div><div class="nav-uXWtWs" data-id="404:530"><div class="blog-yWC395 roboto-normal-chicago-18px" data-id="404:531">Blog</div><div class="about-yWC395 about roboto-normal-chicago-18px" data-id="404:532">About</div><div class="contact-yWC395 contact roboto-normal-chicago-18px" data-id="404:533">Contact</div></div></header></div></div></div></div><script src="launchpad-js/launchpad-banner.js" async></script><script defer src="https://animaapp.s3.amazonaws.com/static/restart-btn.min.js"></script></body></html>