


<!-- Trigger -->
<button class="btn copy" data-clipboard-text="Just because you can doesn't mean you should — clipboard.js">
    Copy to clipboard
</button>
----- ou ------

<!-- Target -->
<input id="foo" value="https://github.com/zenorocha/clipboard.js.git">

<!-- Trigger -->
<button class="btn btn-sm copy" data-clipboard-target="#foo">
    <i class="fa fa-copy"></i>
</button>





@if($mode == 'exe')
    @section('footer_scripts')
@endif

<script>

        $(document).ready(function(){

            $(".copy").tooltip({
              placement: 'right'
            });


            var clipboard = new Clipboard('.copy');


            clipboard.on('success', function(e) {
                // console.info('Action:', e.action);
                // console.info('Text:', e.text);
                // console.info('Trigger:', e.trigger);

                // e.trigger.tooltip({ title: 'Copied' });
                $(e.trigger).attr('title', 'Copied').tooltip('fixTitle').tooltip('show');
                setTimeout(function(){
                    $(e.trigger).attr('title', '').tooltip('fixTitle').tooltip('hide');
                }, 5000);


                e.clearSelection();
            });

            clipboard.on('error', function(e) {
                console.error('Action:', e.action);
                console.error('Trigger:', e.trigger);
            });
        })

</script>

@if($mode == 'exe')
    @endsection
@endif
