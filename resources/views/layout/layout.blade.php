<!doctype html>
<head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">    

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/css/select2.min.css" />
</head>
<body>
    <nav class="flex items-center justify-between flex-wrap bg-teal p-6">
        <div class="flex items-center flex-no-shrink text-white mr-6">
            <svg class="h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/>
            </svg>
            <span class="font-semibold text-xl tracking-tight">Testing App</span>
        </div>
        <div class="block lg:hidden">
            <button class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light hover:text-white hover:border-white">
            <svg class="h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
            </button>
        </div>   
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-sm lg:flex-grow">
                <span class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter mr-4">
                    Logged User Name
                </span>
                <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter mr-4">
                    Log Out
                </a>        
            </div>
            <div>        
        </div>    
    </nav>
    <div class="container main-container">
        <div class="row">
            <div class="col-md-5">
                <div>
                    <div class="flex flex-col sm:flex-row">           

                        <div class="w-64 h-screen bg-gray-800">
                            <div class="flex items-center justify-center mt-10">
                                <img class="h-6" src="https://premium-tailwindcomponents.netlify.app/assets/svg/tailwindcomponent-light.svg">
                            </div>

                            <nav class="mt-10">
                                <div x-data="{ open: false }">
                                    <button @click="open = !open" class="w-full flex justify-between items-center py-3 px-6 text-gray-100 cursor-pointer hover:bg-gray-700 hover:text-gray-100 focus:outline-none">
                                        <span class="flex items-center">
                                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>

                                            <span class="font-medium">Dashboard</span>
                                        </span>                            
                                    </button>                        
                                </div>

                                <div x-data="{ open: false }">
                                    <button @click="open = !open" class="w-full flex justify-between items-center py-3 px-6 text-gray-100 cursor-pointer hover:bg-gray-700 hover:text-gray-100 focus:outline-none">
                                        <span class="flex items-center">
                                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>

                                            <span class="font-medium"><a class="py-2 block text-sm text-gray-100 hover:bg-blue-500 hover:text-white" href="#">Employee Management</a></span>
                                        </span>                            
                                    </button>                        
                                </div>

                                <div x-data="{ open: false }">
                                    <button @click="open = !open" class="w-full flex justify-between items-center py-3 px-6 text-gray-100 cursor-pointer hover:bg-gray-700 hover:text-gray-100 focus:outline-none">
                                        <span class="flex items-center">
                                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15 5V7M15 11V13M15 17V19M5 5C3.89543 5 3 5.89543 3 7V10C4.10457 10 5 10.8954 5 12C5 13.1046 4.10457 14 3 14V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V14C19.8954 14 19 13.1046 19 12C19 10.8954 19.8954 10 21 10V7C21 5.89543 20.1046 5 19 5H5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>

                                            <span class="font-medium"><a class="py-2 block text-sm text-gray-100 hover:bg-blue-500 hover:text-white" href="#">System Management</a></span>
                                        </span>

                                        <span>
                                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>
                                                <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                    </button>

                                    <div x-show="open" class="bg-gray-700">
                                        <a class="py-2 px-16 block text-sm text-gray-100 hover:bg-blue-500 hover:text-white" href="{{route('countries')}}">Country</a>
                                        <a class="py-2 px-16 block text-sm text-gray-100 hover:bg-blue-500 hover:text-white" href="{{route('state.index')}}">State</a>
                                        <a class="py-2 px-16 block text-sm text-gray-100 hover:bg-blue-500 hover:text-white" href="#">City</a>
                                        <a class="py-2 px-16 block text-sm text-gray-100 hover:bg-blue-500 hover:text-white" href="#">Department</a>
                                    </div>
                                </div>

                                <div x-data="{ open: false }">
                                    <button @click="open = !open" class="w-full flex justify-between items-center py-3 px-6 text-gray-100 cursor-pointer hover:bg-gray-700 hover:text-gray-100 focus:outline-none">
                                        <span class="flex items-center">
                                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15 5V7M15 11V13M15 17V19M5 5C3.89543 5 3 5.89543 3 7V10C4.10457 10 5 10.8954 5 12C5 13.1046 4.10457 14 3 14V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V14C19.8954 14 19 13.1046 19 12C19 10.8954 19.8954 10 21 10V7C21 5.89543 20.1046 5 19 5H5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>

                                            <span class="font-medium"><a class="py-2 block text-sm text-gray-100 hover:bg-blue-500 hover:text-white" href="#">System Management</a></span>
                                        </span>

                                        <span>
                                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>
                                                <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                    </button>

                                    <div x-show="open" class="bg-gray-700">
                                        <a class="py-2 px-16 block text-sm text-gray-100 hover:bg-blue-500 hover:text-white" href="#">User</a>
                                        <a class="py-2 px-16 block text-sm text-gray-100 hover:bg-blue-500 hover:text-white" href="#">Role</a>
                                        <a class="py-2 px-16 block text-sm text-gray-100 hover:bg-blue-500 hover:text-white" href="#">Permission</a>                            
                                    </div>
                                </div>
                            </nav>                
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                @yield('content')
            </div>
            
        </div>
    </div>   

    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/js/select2.min.js"></script> 
    
    <script>
        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif

        @if(Session::has('error'))
            toastr.error("{{ Session::get('error') }}")
        @endif

        @if(Session::has('info'))
            toastr.error("{{ Session::get('info') }}")
        @endif
    </script>

    <script>
        
        $(".select-simple").select2({
            width: '40%'
        }); 

        $('#country-select').change(function(){
                selected_value=$('#country-select').val();

                //load data
                $.ajax({
                    url: '{{url("country/loadcountries")}}',
                    method: 'GET',
                    data: {
                        id: selected_value
                    },
                    success: function(data){
                        $('tbody').empty(); 
                        $('tbody').html(data.data);    
                                                                   
                    },
                    error: function(data){
                        console.log(data);
                    }
                });
        }); 

        $('#state-select').change(function(){
                selected_value=$('#state-select').val();

                //load data
                $.ajax({
                    url: '{{url("state/loadstates")}}',
                    method: 'GET',
                    data: {
                        id: selected_value
                    },
                    success: function(data){
                        $('tbody').empty(); 
                        $('tbody').html(data.data);    
                                                                   
                    },
                    error: function(data){
                        console.log(data);
                    }
                });
        }); 
    </script>
</body>
</html>