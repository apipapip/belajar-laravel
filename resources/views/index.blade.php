@extends('templates.layout')
@section('halaman_judul','halaman index')
@section('biodata')
@section('style')
<style>
    h1 {
        color:darkred;
    }

    h5 {
        color:gray;
        text-align: justify;
    }
    h2{
        color:cadetblue;
    }
</style>
@endsection
@section('kontent')
<h1>
    Halaman Index
</h1>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h2>Index</h2>
            </div>
            <div class="card-body">
                <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda molestias quis,
                    ipsam officia eveniet sit accusamus voluptatum laborum commodi perferendis doloribus,
                    minima rerum magnam dolore nam atque magni animi sed dolores, facilis cum asperiores
                    inventore dignissimos ipsa! Obcaecati, unde quasi laudantium velit, doloremque saepe
                    perspiciatis, molestias eum a assumenda ipsa nobis ullam recusandae. Voluptate porro
                    mollitia tempore quo rerum quas excepturi sapiente, consequuntur necessitatibus molestiae
                    eligendi optio nisi fuga illo, odit impedit ipsum minima possimus aperiam iste
                    delectus ratione eum magnam ipsa. Sapiente, adipisci? Consequatur doloribus facilis,
                    et rem ipsa fuga cumque quo sint provident molestias est magni velit corrupti eveniet temporibus
                    suscipit. Sequi optio consectetur corporis architecto laborum, impedit nesciunt voluptatibus libero
                    sint dolorem illum ullam ex accusamus? Adipisci neque in ab, aliquid fuga iste cumque rerum natus at
                    quasi atque laborum maiores dignissimos, quas quia numquam nulla sunt nisi ipsum, cupiditate commodi?
                    Eaque suscipit incidunt provident quod praesentium!</h5
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<!-- <script>
    alert('siuuu');
</script> -->
@endsection