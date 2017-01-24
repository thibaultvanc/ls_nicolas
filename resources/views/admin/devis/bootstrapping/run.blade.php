@extends('layouts.admin')

@section('content')






    <h1>run bootstrapping for devis {{$devis->id}}</h1>




    <bootstrapping :devis="{{$devis}}"></bootstrapping>


@endsection

@section('footer_scripts')

<script>
    $(document).ready(function(){

        $(".copy").tooltip({
          placement: 'right'
        });


        var clipboard = new Clipboard('.copy');


        clipboard.on('success', function(e) {
            console.info('Action:', e.action);
            console.info('Text:', e.text);
            console.info('Trigger:', e.trigger);

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



@endsection
