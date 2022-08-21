
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Header Section (Meta Tag) -->
        @include('backend.includes.head')

        <!-- CSS Link -->
        @include('backend.includes.css')


    </head>

    <body>
        <!-- Left Bar Link -->
        @include('backend.includes.leftbar')

        <!-- Top Bar Link -->
        @include('backend.includes.topbar')

        <!-- Right Bar Link -->
        @include('backend.includes.rightbar')


        <!-- ########## START: MAIN PANEL ########## -->
        <div class="br-mainpanel">
            <div class="br-pagetitle">
                <i class="icon ion-ios-home-outline"></i>
                <div>
                    <h4>Dashboard</h4>
                    <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
                </div>
            </div>
            <div class="br-pagebody">
                <div class="row row-sm">
                    @yield('imran')
                </div><!-- row -->
            </div><!-- br-pagebody -->
                <!-- Footer Link -->
                @include('backend.includes.footer')
        </div><!-- br-mainpanel -->
        <!-- ########## END: MAIN PANEL ########## -->

        <!-- JavaScript Link -->
        @include('backend.includes.script')

    </body>

</html>
