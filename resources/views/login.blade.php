 @extends('Frontend.layout.carmain')

 @section('content')





     <div id="sisf-page-outer">

        <div
            class="sisf-page-title sisf-m sisf-title--standard sisf-alignment--center sisf-vertical-alignment--header-bottom sisf--has-image">
            <div class="sisf-m-inner">
                <div class="sisf-m-content sisf-content-grid ">
                    <h1 class="sisf-m-title entry-title">
                        Login </h1>
                </div>
            </div>
        </div>


     <!-- Login -->
     <section class="contact section-padding">
        <div style="margin: auto; width: 50%; border: 1px solid #F5B753; padding: 15px; margin-top: 20px; margin-bottom: 20px;" class="container">
            <div class="row">
                <!-- Form -->
                <div class="col-lg-6 col-md-6 mb-30">
                    <div class="form-box">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input name="email" type="email" placeholder="Your Email *" required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <input name="password" type="password" placeholder="Your Password *" required>
                                </div>
                                <div class="col-md-12">
                                    <input name="submit" type="submit" value="Send Message">
                                    <h5>If Don't Have Account <a style="color: #F5B753"
                                            href="{{ route('register') }}"><u>Register</u></a></h5>

                                </div>
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <p style="color:red;">{{ $error }}</p>
                                    @endforeach
                                @endif

                                @if (Session::has('error'))
                                    <p style="color:red;">{{ Session::get('error') }}</p>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

     </div>


 @endsection
