<!-- @modal(['title' => 'Create Base','footer' => ['ok'=>'yes', 'cancel'=>'no'], 'btn' =>['text'=>'Create Base', 'type'=>'warning', 'classes'=>'btn-1 btn-2 btn-3']]) -->
<?php
    if(!isset($btn)){ // text for the button
        $btn['text'] = "text";
        $btn['type'] = "primary";
        $btn['classes'] = "modal-trigger-btn otherClasses";
        $btn['text'] = "text";
    }
    if(!isset($id)) // id for the modal
        $id = "exampleModalCenter";
    if(!isset($showBtn))
        $showBtn = true;
    if(!isset($title))
        $title = "";
    if(!isset($showFooter))
        $showFooter = true;
    if(!isset($footer)){
        $footer['ok'] = "Save";
        $footer['cancel'] = "Close";
        $footer['cancel'] = "Close";
    }
?>
<!-- Button trigger modal -->
@if($showBtn)
    <button type="button" class="btn btn-{{$btn['type']}} {{$btn['classes']}}" data-toggle="modal" data-target="#{{$id}}">
        {{ $btn['text'] }}
    </button>
@endif

<!-- Modal -->
<div class="modal fade" id="{{$id}}" tabindex="-1" role="dialog" aria-labelledby="title-001" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                @if(isset($title)) <h5 class="modal-title" id="title-001">{{$title}}</h5> @endif
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{$slot}}
            </div>
            @if($showFooter)
                <div class="modal-footer">
                    @if(isset($footer['cancel'])) <button type="button" class="btn btn-secondary" data-dismiss="modal">{{$footer['cancel']}}</button> @endif
                    @if(isset($footer['ok'])) <button type="button" class="btn btn-primary">{{$footer['ok']}}</button> @endif
                </div>
            @endif
        </div>
    </div>
</div>