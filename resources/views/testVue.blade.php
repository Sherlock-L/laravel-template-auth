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

        <script>


         var vm =    new Vue({
                el: '#test-lsw',
                data() {
                    return {
                        form:{
                            name:'1',
                            age:'2',
                            sex:'3',
                        },
                        message: '<h1>测试一个vue</h1>'
                    }
                },
                // data: {
                //     form:{
                //         name:'1',
                //         age:'2',
                //         sex:'3',
                //     },
                //     message: '<h1>测试一个vue</h1>'
                // },
                methods:{
                    loadInfo(){
                        this.$http.get("http://127.0.0.1:9989/api/test/info")
                            .then((res) => {

                                // this.form.name = res.data.data.name;
                                this.form = res.data.data;
                                // this.form = res.data.data;
                                console.log(this.form)
                            })
                    }
                },
                created() {
                    this.loadInfo();
                  }
            })
        </script>
@endsection

