<h1 style="text-align: center;">Preguntas Frecuentes</h1>

<div class="row" style="margin: 5%">
    <div class="faq">
        <div class="title-tab" id="question"><i class="fa fa-1x"></i>Pregunta frecuente 1</div>
        <div class="content-tab" id="answer">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia ut eligendi nisi cum obcaecati beatae.</div>

        <div class="title-tab" id="question"><i class="fa fa-1x"></i>Pregunta frecuente 2</div>
        <div class="content-tab" id="answer">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corrupti aspernatur necessitatibus veniam, animi dolor!</div>

        <div class="title-tab" id="question"><i class="fa fa-1x"></i>Pregunta frecuente 3</div>
        <div class="content-tab" id="answer">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est praesentium ipsa enim, culpa facilis sunt!</div>

        <div class="title-tab" id="question"><i class="fa fa-1x"></i>Pregunta frecuente 4</div>
        <div class="content-tab" id="answer">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto aspernatur, explicabo dolores, beatae tenetur sunt.</div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(".content-tab:not(:eq(0))").toggle();
        $(".title-tab i").toggleClass("fa-plus");

        $(".title-tab").click(function() {
            $(".content-tab").hide();
            $(".title-tab i").removeClass("fa-minus");
            $(".title-tab i").addClass("fa-plus");
            $(this).next().show();
            $(this).children().addClass("fa-minus");
        })
    })
</script>