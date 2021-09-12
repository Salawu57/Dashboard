
        @if($message = Session::get('error'))

        <script>

                 $(document).ready(function() {

                     toastr.options.timeOut = 4000;

                     toastr.error('{{ Session::get('error') }}');

                 });

         </script>

        @endif


           @if($message = Session::get('success'))

                <script>

                         $(document).ready(function() {

                             toastr.options.timeOut = 4000;

                             toastr.success('{{ Session::get('success') }}');

                         });

                 </script>

                @endif


                 @if(count($errors) > 0))

                                <script>

                                @foreach($errors->all() as $error)
                                         $(document).ready(function() {

                                             toastr.options.timeOut = 4000;

                                             toastr.error('{{$error}}');

                                         });

                                         @endforeach

                                 </script>

                                @endif


