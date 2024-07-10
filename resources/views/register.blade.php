
    @extends('Frontend.layout.carmain')

    @section('content')
    @if(Session::has('success'))
        <p style="color:green;">{{ Session::get('success') }}</p>
    @endif

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
                            <div class="col-lg-12 col-md-12 mb-30">
                                <div class="form-box">
                                    <form action="{{ route('register') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <input name="name" type="text" placeholder="Enter Name *" required>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <input name="email" type="email" placeholder="Enter Email *" required>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <input name="password" type="password" placeholder="Enter Password *" required>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <input name="password_confirmation" type="password" placeholder="Enter Confirm Password *" required>
                                            </div>
                                            <div class="col-md-12">
                                                <input name="submit" type="submit" value="Register">
                                                <h5>If Already Register <a style="color: #F5B753" href="{{ route("login") }}"><u>Login</u></a></h5>
                                            </div>
                                            @if($errors->any())
                                            @foreach($errors->all() as $error)
                                            <p style="color:red;">{{ $error }}</p>
                                            @endforeach
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
