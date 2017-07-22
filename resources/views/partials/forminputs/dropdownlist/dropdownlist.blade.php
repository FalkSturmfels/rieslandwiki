@if($light)
    <a class="btn btn-{{$type}} btn-select btn-select-light">
@else
    <a class="btn btn-{{$type}} btn-select ">
@endif
    <input type="hidden" class="btn-select-input" id="" name="" value=""/>
    <span class="btn-select-value">No items</span>
    <span class='btn-select-arrow glyphicon glyphicon-chevron-down'></span>
        <ul>
            @if($values != null)
                @for($i=0; $i < $values->count(); $i++)
                    @if($i == 0)
                        <li class="selected">{{$values[$i]}}</li>
                    @else
                        <li>{{$values[$i]}}</li>
                    @endif
                @endfor
            @endif
        </ul>
    </a>
@if($type == 'danger')
    @include('partials.forminputs.dropdownlist.css.danger')
@endif
@if($type == 'default')
    @include('partials.forminputs.dropdownlist.css.default')
@endif
@if($type == 'info')
    @include('partials.forminputs.dropdownlist.css.info')
@endif
@if($type == 'primary')
    @include('partials.forminputs.dropdownlist.css.primary')
@endif
@if($type == 'success')
    @include('partials.forminputs.dropdownlist.css.success')
@endif
@if($type == 'warning')
    @include('partials.forminputs.dropdownlist.css.warning')
@endif
@include('partials.forminputs.dropdownlist.css.common')

<script src="/js/component/dropdownlist.js"></script>