@extends('layout.scaffold')
@section('content')
<style>
        .img1{
            background-image: url(assets/img/xwork-progress.png.pagespeed.ic.cX59lUmrRM.webp);
            background-size: 100%;
            position: 50% 50%;
            height: 400px;
        }
        .img2{
            background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.900), rgba(0, 0, 0, 0.900)), url(assets/img/xcta.jpg.pagespeed.ic.qs1-qGXUwh.webp);
            background-size: 100%;
            position: 50% 50%;
        }
    </style>
<div style="background: linear-gradient(to right, darkblue, blue );" class="pt-5 container-fluid">
        <div class="text-light text-center">
            <h1>A clean and Modern Template</h1>
            <b>Get your freebie template now!</b>
            <div class="mt-3">
                <img src="{{asset('assets/img/xdevice.png.pagespeed.ic.i7QufXzdIw.webp')}}" alt="xdevice.png.pagespeed.ic.i7QufXzdIw" width="70%">
            </div>
        </div>          
    </div>
    <div class="mt-5">
        <div class="container">
            <div class="row">
                <div class="text-center col-md-4">
                    <h1 style="font-size: 50px;" class="text-secondary">01.</h1>
                    <h3>NO 1 in Sales!</h3>
                    <small class="text-secondary">Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.</small>
                </div>
                <div class="text-center col-md-4">
                    <h1 style="font-size: 50px; color: #4A7AEC;">02.</h1>
                    <h3>NO 2 online marketing</h3>
                    <small class="text-secondary">Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.</small>
                </div>
                <div class="text-center col-md-4">
                    <h1 style="font-size: 50px;" class="text-secondary">03.</h1>
                    <h3>NO 3 Modern Design</h3>
                    <small class="text-secondary">Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.</small>
                </div>
                <div class="text-center mt-5">
                    <button style="border-radius: 30px;" class="pl-3 pr-3 btn btn-primary p-2"><small>DISCOVER MORE</small></button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="mt-5 text-center pt-5">
                <small style="font-family: monospace;" class="text-secondary">CILENTS</small><br>
                <h1>All our clients love our work</h1>
                <div class="row">
                    <div class="col-md-2 mt-5">
                        <img src="{{asset('assets/img/x1.png.pagespeed.ic.cmENJtDgeU.webp')}}" alt="x1.png.pagespeed.ic.cmENJtDgeU">
                    </div>
                    <div class="col-md-2 mt-5">
                        <img src="{{asset('assets/img/x2.png.pagespeed.ic.OA3e7frvuG.webp')}}" alt="x2.png.pagespeed.ic.OA3e7frvuG">
                    </div>
                    <div class="col-md-2 mt-5">
                        <img src="{{asset('assets/img/x3.png.pagespeed.ic.c3pv7nx_DO.webp')}}" alt="x3.png.pagespeed.ic.c3pv7nx_DO">
                    </div>
                    <div class="col-md-2 mt-5">
                        <img src="{{asset('assets/img/x4.png.pagespeed.ic.CWGM6E2voR.webp')}}" alt="x4.png.pagespeed.ic.CWGM6E2voR">
                    </div>
                    <div class="col-md-2 mt-5">
                        <img src="{{asset('assets/img/x5.png.pagespeed.ic.eU5CHASqzA.webp')}}" alt="x5.png.pagespeed.ic.eU5CHASqzA">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color: #211B31;" class="p-5 mt-5 container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-5 pt-5">
                    <img src="{{asset('assets/img/xfeatures.png.pagespeed.ic.ZdY3tiG0_C.webp')}}" alt="xfeatures.png.pagespeed.ic.ZdY3tiG0_C" height="100%" width="100%">
                </div>
            <div class="col-md-6 mt-5 pt-5">
                <small style="font-family: monospace;" class="text-light">CILENTS</small><br>
                <h1 style="color: white;">What you get if you start your business with us</h1>
                <p class="text-light mt-5">Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio ves tibul. Nec odio vestibulum est mattis effic iturut magna. Pellente sque sita met tellus blandit. Etiam n
                    <p style="margin-bottom: -20px;" class="mt-3 text-light">Development</p>
                    <span class="tip" style="color: rgb(74, 122, 236); padding-left: 64%;">70%</span>
                    <div style="border-top: solid 5px rgb(74, 122, 236); width: 70%;"></div>
                    <p style="margin-bottom: -20px;" class="mt-3 text-light">Design</p>
                    <span class="tip" style="color: rgb(74, 122, 236); padding-left: 84%;">90%</span>
                    <div style="border-top: solid 5px rgb(74, 122, 236); width: 90%;"></div>
                    <p style="margin-bottom: -20px;" class="mt-3 text-light">SEO</p>
                    <span class="tip" style="color: rgb(74, 122, 236); padding-left: 49%;">55%</span>
                    <div style="border-top: solid 5px rgb(74, 122, 236); width: 55%;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="contianer-fluid">
        <div class="container">
            <div class="row">
                <div class="mt-3 text-center mt-5 col-md-3">
                    <img src="{{asset('assets/img/xtrophy.png.pagespeed.ic._rNUY_NDrr.webp')}}" alt="xtrophy.png.pagespeed.ic._rNUY_NDrr">
                    <h4 class="text-dark mt-3">NO 1 In Sales!</h4>
                    <p class="text-secondary">Nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am.</p>
                </div>
                <div class="mt-3 text-center mt-5 col-md-3">
                    <img src="{{asset('assets/img/xedit.png.pagespeed.ic.yhUaGAGrQW.webp')}}" alt="xedit.png.pagespeed.ic.yhUaGAGrQW">
                    <h4 class="text-dark mt-3">Document Inside</h4>
                    <p class="text-secondary">Nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am.</p>
                </div>
                <div class="mt-3 text-center mt-5 col-md-3">
                    <img src="{{asset('assets/img/xvideo-camera.png.pagespeed.ic.PEzYxEwqCr.webp')}}" alt="xvideo-camera.png.pagespeed.ic.PEzYxEwqCr">
                    <h4 class="text-dark mt-3">Modern Design</h4>
                    <p class="text-secondary">Nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am.</p>
                </div>
                <div class="mt-3 text-center mt-5 col-md-3">
                    <img src="{{asset('assets/img/xpresentation.png.pagespeed.ic.sdSBEXwEyw.webp')}}" alt="xpresentation.png.pagespeed.ic.sdSBEXwEyw">
                    <h4 class="text-dark mt-3">Marketing Stategist</h4>
                    <p class="text-secondary">Nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am.</p>
                </div>
            </div>
            <div class="pt-5 mt-5 text-center">
                <small class="text-secondary">OUR WORK</small>
                <h1 class="text-dark">See our Online Portfolio</h1>
            </div>
        </div>
    </div>

    <div class="bg-light p-5 container-fluid">
        <div class="text-center mt-5">
            <small class="text-secondary">OUR WORK FLOW</small>
            <h1 class="text-dark">This is how we work on Projects</h1>
        </div>
        <div class="img1 mt-3"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <b><span style="background-color: lightgrey;" class="text-center rounded-circle p-3 ">.1</span> This is the first step</b><br><br>
                        <p class="text-secondary">Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.</p>
                    </div>
                    <div class="col-md-4">
                        <b><span style="background-color: lightgrey;" class="text-center rounded-circle p-3 ">.2</span> This is the second step</b><br><br>
                        <p class="text-secondary">Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.</p>
                    </div>
                    <div class="col-md-4">
                        <b><span style="background-color: lightgrey;" class="text-center rounded-circle p-3 ">.3</span> This is the third step</b><br><br>
                        <p class="text-secondary">Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="img2 mt-5 container-fluid">
        <div class="p-5 text-center text-light container">
            <div class="mt-5">
                <small>Give US A SHOUT</small>
            </div>
            <h1>Are you Ready to have a Talk?</h1>
            <button style="border-radius: 30px;" class="btn btn-primary mt-3 p-3"><b>CONTACT US</b></button>
        </div>
    </div>
@endsection