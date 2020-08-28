<div class="page_title">

    <div class="title_left">

        <h2>SEO (Search Engine Optimization)</h2>

    </div>

</div>

<div class="clearfix"></div>

<div class="row">

    <?php
        if($seo) {
            $seo_key = ' ' . $seo->key;
            $form_route = route('seo.edit', $seo->id);
            $form_error_bag = 'errorSeoEdit';
        } else {
            $seo_key = '';
            $form_route = route('seo.store');
            $form_error_bag = 'errorSeoCreate';
        }
    ?>

    <div class="col-xs-12">

        <div class="create-or-edit-seo">

            @include('seo::errors', ['error_bag_name' => $form_error_bag])

            <form action="{{ $form_route }}" method="POST">

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="errorBag" value="{{ $form_error_bag }}">

                @include('seo::inputs')

                <div class="action-buttons">

                    <button type="submit" class="btn btn-success">Salvar{!! $seo_key !!}</button>

                </div>

            </form>

        </div>

    </div>

</div>
