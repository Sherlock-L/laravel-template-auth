@extends('layouts.test')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body" id="test-lsw" >
                        <span >名字: @{{form.name}} <br></span>
                        <span>年龄: @{{form.age}}<br></span>
                         <span >性别:@{{form.sex}}</span>
                         <p v-html="message"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <script type="text/javascript">
         let vm =    new Vue({
                el: '#test-lsw',
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
             created () {
                      this.loadInfo();
             },
             mounted () {
                 this.loadInfo();
             },
             beforeMount () {
                 axios.get('http://127.0.0.1:9989/api/test/info')
                     .then( response =>{
                         console.log(response);
                         this.form = response.data.data;
                         this.loading=false;
                     })
             }
            });

         // console.log(vm.form);
        </script>
@endsection

