<div class="row">

    <input type="hidden" name="rel" value="{{ $model_relation }}">
    <input type="hidden" name="rel_id" value="{{ $model_id }}">

    <div class="col-sm-4">

        <div class="x_panel">

            <div class="x_title">

                <h4>Google</h4>

            </div>

            {!! seo_form_builder_text('Título', 'title', $seo ?? false) !!}

            {!! seo_form_builder_textarea('Descrição', 'description', $seo ?? false) !!}

            {!! seo_form_builder_text('Robots', 'robots', $seo ?? false) !!}

        </div>

    </div>

    <div class="col-sm-4">

        <div class="x_panel">

            <div class="x_title">

                <h4>Facebook</h4>

            </div>

            {!! seo_form_builder_text('Título', 'og_title', $seo ?? false) !!}

            {!! seo_form_builder_textarea('Descrição', 'og_description', $seo ?? false) !!}

            {!! seo_form_builder_text('Tipo', 'og_type', $seo ?? false) !!}

            {!! seo_form_builder_text('Imagem', 'og_image', $seo ?? false) !!}

            {!! seo_form_builder_text('URL', 'og_url', $seo ?? false) !!}

            {!! seo_form_builder_text('Nome do Site', 'og_sitename', $seo ?? false) !!}

            {!! seo_form_builder_text('FB Admin:', 'og_fb_admins', $seo ?? false) !!}

        </div>

    </div>

    <div class="col-sm-4">

        <div class="x_panel">

            <div class="x_title">

                <h4>Twitter</h4>

            </div>

            {!! seo_form_builder_text('Twitter Card', 'twitter_card', $seo ?? false) !!}

            {!! seo_form_builder_text('URL', 'twitter_url', $seo ?? false) !!}

            {!! seo_form_builder_text('Título', 'twitter_title', $seo ?? false) !!}

            {!! seo_form_builder_text('Imagem', 'twitter_image', $seo ?? false) !!}

            {!! seo_form_builder_textarea('Descrição', 'twitter_description', $seo ?? false) !!}

        </div>

    </div>


</div>
