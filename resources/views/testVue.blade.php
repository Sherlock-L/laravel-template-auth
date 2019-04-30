<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script crossorigin="anonymous" integrity="sha384-MJHj8BpV8RPgL3fJEHKQGoo2PKJf1CLlUXlTlOPN/KgR2Mt8Vs/BpcBYPp1eBjts" src="https://lib.baomitu.com/vue/2.6.0/vue.js"></script>
    <script src="https://cdn.bootcss.com/vue-resource/1.5.1/vue-resource.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Dashboard</div>
                        <div class="card-body" id="test" >
                            <span >名字: @{{form.name}} <br></span>
                            <span>年龄: @{{form.age}}<br></span>
                            <span >性别:@{{form.sex}}</span>
                            <p v-html="message"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>
</div>
</body>
<script type="text/javascript">
    let vm =    new Vue({
        el: '#test',
        // data() {
        //     return {
        //         loading:true,
        //         form:{
        //             name:'1',
        //             age:'2',
        //             sex:'3',
        //         },
        //         message: '<h1>测试一个vue</h1>'
        //     }
        // },
        data: {
            form:{
                name:'1',
                age:'2',
                sex:'3',
            },
            message: '<h1>测试一个vue</h1>'
        },
        methods:{
            loadInfo(){
                axios.get('http://127.0.0.1:9989/api/test/info')
                    .then( (response) =>{
                        console.log(response);
                        this.form = response.data.data;
                        this.loading=false;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
                // this.$http.get("http://127.0.0.1:9989/api/test/info")
                //     .then((res) => {
                //         return  res.data.data;
                //         // this.form.name = res.data.data.name;
                //     })
            }
        },
        mounted () {
            axios.get('http://127.0.0.1:9989/api/test/info')
                .then( (response) =>{
                    console.log(response);
                    this.form = response.data.data;
                    this.loading=false;
                })
                .catch(function (error) {
                    console.log(error);
                });
        },

    });

    // console.log(vm.form);
</script>
</html>



