@extends('admin.layouts.admin')

@section('content')


    <div class="flex-grid">
        <div class="col" style="color: transparent;">.</div>
        <div class="col" style="color: transparent;">.</div>
        <div class="col" style="color: transparent;">.</div>
    </div>

    <div class="flex-grid">
        <div class="col">
            <div class="card">
                <img src="https://2k8r3p1401as2e1q7k14dguu-wpengine.netdna-ssl.com/wp-content/themes/warontherocks/assets/img/page/title-about.png" alt="About page" style="width:100%;height: 180px;">
                <div class="container">
                    <h4 class="text-center-ti"><b>About Page</b></h4>
                    <p class="text-center-ti">About us company page...</p>
                    <a href="{{ route('admin.edit_page', 'about') }}" class="btn btn-primary full-button">Edit Page</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="{{asset('/assets/app/img/termsConditionsIcon.jpg')}}" alt="Terms & conditions" style="width:100%;height: 180px;">
                <div class="container">
                    <h4 class="text-center-ti"><b>Terms</b></h4>
                    <p class="text-center-ti">Terms & conditions...</p>
                    <a href="{{ route('admin.edit_page', 'terms') }}" class="btn btn-primary full-button">Edit Page</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="{{asset('/assets/app/img/langs.jpg')}}" alt="Languages" style="width:100%;height: 180px;">
                <div class="container">
                    <h4 class="text-center-ti"><b>Language</b></h4>
                    <p class="text-center-ti">Language Page</p>
                    <a href="{{ route('admin.edit_page', 'lang') }}" class="btn btn-primary full-button">Edit Page</a>
                </div>
            </div>
        </div>
    </div>

    <div class="flex-grid-thirds">
        <div class="col">
            <div class="card">
                <img src="{{asset('/assets/app/img/comm.jpg')}}" alt="Languages" style="width:100%;height: 180px;">
                <div class="container">
                    <h4 class="text-center-ti"><b>Contact Us</b></h4>
                    <p class="text-center-ti">Contact Us page</p>
                    <a href="{{ route('admin.edit_page', 'contact') }}" class="btn btn-primary full-button">Edit Page</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="{{asset('/assets/app/img/landingpage1.jpg')}}" alt="Languages" style="width:100%;height: 180px;">
                <div class="container">
                    <h4 class="text-center-ti"><b>Landing</b></h4>
                    <p class="text-center-ti">First customer presented screen</p>
                    <a href="{{ route('admin.edit_page', 'landing') }}" class="btn btn-primary full-button">Edit Page</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="{{asset('/assets/app/img/signupbutton.png')}}" alt="Languages" style="width:100%;height: 180px;">
                <div class="container">
                    <h4 class="text-center-ti"><b>Talent Register</b></h4>
                    <p class="text-center-ti">Sign up page for talent</p>
                    <a href="{{ route('admin.edit_page', 'talent_signup') }}" class="btn btn-primary full-button">Edit Page</a>
                </div>
            </div>
        </div>
    </div>

    <div class="flex-grid-thirds">
        <div class="col">
            <div class="card">
                <img src="{{asset('/assets/app/img/recruiterregisterImg.png')}}" alt="Languages" style="width:100%;height: 180px;">
                <div class="container">
                    <h4 class="text-center-ti"><b>Recruiter Register</b></h4>
                    <p class="text-center-ti">Sign up Recruiter page</p>
                    <a href="{{ route('admin.edit_page', 'recruiter_signup') }}" class="btn btn-primary full-button">Edit Page</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="{{asset('/assets/app/img/lockauthenticate.png')}}" alt="Languages" style="width:100%;height: 180px;">
                <div class="container">
                    <h4 class="text-center-ti"><b>Sign In</b></h4>
                    <p class="text-center-ti">Sign In page</p>
                    <a href="{{ route('admin.edit_page', 'signin') }}" class="btn btn-primary full-button">Edit Page</a>
                </div>
            </div>
        </div>
        <div class="col">
            <!-- Empty -->
        </div>
    </div>


    <!--<div class="flex-grid">
        <div class="col">
            <div class="card">
                <img src="https://2k8r3p1401as2e1q7k14dguu-wpengine.netdna-ssl.com/wp-content/themes/warontherocks/assets/img/page/title-about.png" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>About Page</b></h4>
                    <p>Architect & Engineer</p>
                    <a href="{{ route('admin.edit_page', 'about_us') }}" class="btn btn-primary">Edit Page</a>
                </div>
            </div>
        </div>
    </div>-->
    <div class="container">
        <div class="row">

            <!--<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <a href="{{ route('admin.edit_page', 'landing') }}">LANDING</a>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <a href="{{ route('admin.edit_page', 'about_us') }}">ABOUT US</a>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <a href="{{ route('admin.edit_page', 'terms_of_user_and_privacy') }}">TERMS OF USE & PRIVACY</a>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <a href="{{ route('admin.edit_page', 'language') }}">LANGUAGE</a>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <a href="{{ route('admin.edit_page', 'contact_us') }}">CONTACT US</a>
            </div>-->

            <!--<div class="col-3 col-sm-3col-md-3 col-lg-3">
                <div class="card">
                    <img src="https://2k8r3p1401as2e1q7k14dguu-wpengine.netdna-ssl.com/wp-content/themes/warontherocks/assets/img/page/title-about.png" alt="Avatar" style="width:100%">
                    <div class="container">
                        <h4><b>About Page</b></h4>
                        <p>Architect & Engineer</p>
                        <a href="{{ route('admin.edit_page', 'about_us') }}" class="btn btn-primary">Edit Page</a>
                    </div>
                </div>
            </div>-->

        </div>
    </div>

@endsection

@section('scripts')
    @parent
    {{ Html::script(mix('assets/admin/js/dashboard.js')) }}
    {{ Html::script('assets/admin/js/textcontent.js') }}
@endsection

@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/dashboard.css')) }}
    <style>.card{box-shadow:0 4px 8px 0 rgba(0,0,0,0.2);transition:.3s}.card:hover{box-shadow:0 8px 16px 0 rgba(0,0,0,0.2)}.container{padding:2px 16px}.card{box-shadow:0 4px 8px 0 rgba(0,0,0,0.2);transition:.3s;border-radius:5px}img{border-radius:5px 5px 0 0}.flex-grid{display:flex}.flex-grid .col{flex:1}.flex-grid-thirds{display:flex;justify-content:space-between}.flex-grid-thirds .col{width:32%}@media (max-width: 400px){.flex-grid,.flex-grid-thirds{display:block}.flex-grid-thirds .col{width:100%;margin:0 0 10px}}.flex-grid{margin:0 0 20px}.col{padding:20px}.text-center-ti{text-align:center}.full-button{width:80%;margin-left:10%}</style>
    <style>.card {padding: 5% !important;}</style>
    <style>.right_col {overflow-y: auto !important;}</style>
@endsection