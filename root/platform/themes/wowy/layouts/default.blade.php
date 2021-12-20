{!! Theme::partial('header') !!}

<main class="main" style="background-image: url('https://cdn.discordapp.com/attachments/702348374136979486/917446596235501638/background.jpg'); background-repeat:no-repeat; background-position:center; background-attachment:fixed; background-size:cover">

    @if (Theme::get('hasBreadcrumb', true))
        {!! Theme::partial('breadcrumb') !!}
    @endif

    <div class="container">
        {!! Theme::content() !!}
    </div>
</main>

{!! Theme::partial('footer') !!}
