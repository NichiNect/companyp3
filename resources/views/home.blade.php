@extends('layouts.front-app')

@section('style')
<style>
    .garis {
        max-width: 50%;
        border-bottom: 2px solid #000;
    }
</style>
@endsection

@section('content')

<section id="home">
<div class="jumbotron" style="min-height: 500px;">
    <div class="container">
        <h2 class="text-shadow-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h2>
        <hr class="my-4">
        <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam tenetur totam quos veritatis iure molestias, maxime quo sequi, molestiae natus necessitatibus cupiditate vel? Necessitatibus officia quisquam, cum neque assumenda beatae.</p>
        <br>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente quos perspiciatis fugit, optio quas eum! Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates amet fuga repudiandae consequuntur, necessitatibus eos facere iste culpa in similique neque sed, tenetur cum vero? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores dolore fugit officia non incidunt quos, odio beatae dolores nam error. Dignissimos debitis dolorum voluptatibus mollitia, aliquam reiciendis reprehenderit maxime odio. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima quibusdam maxime blanditiis, dolor, quo doloremque aperiam sint unde accusamus optio, facere nesciunt autem repellat rerum nostrum vero mollitia labore molestiae.</p>
    </div>
</div>
</section>

<div class="container" style="background-color: #fff;">
    <section id="about" class="my-3">
        <div class="row py-4">
            <div class="col-lg-12">
                <h1 class="text-center">About</h1>
                <hr class="garis">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-6">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa molestias optio reiciendis eaque illo neque soluta hic maiores, odit quas rem sint at consequatur aut repudiandae amet similique recusandae corporis officia sequi minus maxime dolor iure distinctio. Quos eos minima aut aliquam quis maiores cupiditate, obcaecati unde. Velit voluptas dolor aut quidem tempora est recusandae excepturi a dolorem eligendi accusamus earum sed provident aperiam ratione libero, blanditiis distinctio dolores eaque, iste eveniet tenetur sunt? Voluptatem velit labore doloremque harum at maiores, nulla corporis laboriosam reprehenderit totam eum, dicta natus nam eveniet modi. Ex itaque fuga possimus iusto pariatur voluptas, consequuntur ab id quo, quae hic modi! Exercitationem consectetur voluptatum harum sunt minima iusto quidem ab? Quam eligendi doloremque dignissimos eveniet incidunt eius rerum pariatur vitae! Ullam tempora voluptatem sequi! Earum laudantium dignissimos officia tempora voluptates sunt nulla mollitia eum impedit, provident ad quaerat voluptate quas sit incidunt hic odio deleniti maxime architecto exercitationem libero esse. Amet eveniet magnam cum harum nulla voluptatibus quod ea, nemo, iste consequatur accusantium ad! Rem, fugit dignissimos? Tenetur, molestias. Deserunt maiores neque laudantium nobis voluptatum ab maxime quo placeat sed earum quis nam, labore corrupti officia quae a! Optio quod ea aliquid distinctio necessitatibus ad?</p>
            </div>
            <div class="col-lg-6">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid vero aperiam nulla cum hic explicabo dolor maxime pariatur. Expedita recusandae quos, reiciendis possimus aut quidem dolore enim rem. Ipsum minus vel non, totam labore aliquam corporis iusto animi voluptatem? Ab dicta omnis voluptatibus corporis accusantium ea, ipsum quae tenetur neque ipsa! Modi illum libero quo rem. Iure, aperiam! Eaque sed esse laudantium sit quis autem, at expedita harum culpa amet modi voluptatibus fugit odio numquam recusandae iste, suscipit laboriosam nisi. Doloremque quam, perferendis eligendi reprehenderit sunt ipsum iure laudantium non nam? Similique facilis deleniti voluptatem natus, doloremque ipsum assumenda voluptatum explicabo corporis dignissimos quam laborum ut nam tempora quo! Eum quibusdam ipsum id libero delectus molestias officia voluptatum ex soluta, nisi nesciunt illum quasi dolore adipisci laboriosam quam iste placeat, atque cupiditate? Assumenda non nesciunt fuga atque iste facilis eum deserunt iure, facere dolores aperiam sint unde. Repellat alias facilis nobis consectetur, delectus fugiat saepe, dolore voluptate voluptatum aliquam omnis provident officiis explicabo. Quam eligendi sint, expedita corrupti mollitia dignissimos.</p>
            </div>
        </div>
    </section>
    
    <section id="article" class="my-3">
        <div class="row py-4">
            <div class="col-lg-12">
                <h1 class="text-center">Articles</h1>
                <hr class="garis">
            </div>
        </div>
        <div class="row mt-3">
            @foreach ($articles as $a)
                <div class="col-lg-6">
                    <div class="card kard">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ asset('/storage/artikel/' . $a->picture) }}" class="img-thumbnail" alt="">
                                </div>
                                <div class="col-md-8">
                                    {{ Str::limit($a->title, 25) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section id="contact" class="my-3">
        <div class="row py-4">
            <div class="col-lg-12">
                <h1 class="text-center">Contact</h1>
                <hr class="garis">
            </div>
        </div>
        <form action="" method="post">
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Your name..">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Your Email..">
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea name="message" id="message" class="form-control" rows="5" placeholder="Your message.."></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-outline-secondary px-4">Send!</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
</div>

<div class="row">
    <div class="col-lg-12">
        <hr>
        <p class="text-center">Presented by &copy; Yoni Widhi 2021</p>
    </div>
</div>
@endsection

@section('script')
<script>
$(document).ready(function() {
    $('.kard').mouseover(function() {
        $(this).addClass('shadow-lg');
    }).mouseleave(function() {
        $(this).removeClass('shadow-lg');
    });
})
</script>
@endsection