{!! Theme::partial('header') !!}

<main class="main" style="background-image: url('https://cdn.discordapp.com/attachments/702348374136979486/917446596235501638/background.jpg'); background-repeat:no-repeat; background-position:center; background-attachment:fixed; background-size:cover">
    @if (Theme::get('hasBreadcrumb', true))
        {!! Theme::partial('breadcrumb') !!}
    @endif

    <section class="mt-60 mb-60">
        <div class="container">
            {!! Theme::content() !!}
        </div>
    </section>
</main>

{!! Theme::partial('footer') !!}
