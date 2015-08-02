<div class="field">
  {!! Form::label('subcounty_id', 'Subcounty') !!}
  {!! Form::select('subcounty_id', $subcounties, null, ['class' => 'ui dropdown', 'id' => 'subcounty_id', 'onChange' => 'filterLocation(this.value)' ]) !!}
</div>

<div class="field">
  {!! Form::label('ward_id', 'Ward') !!}
  {!! Form::select('ward_id', $wards, null, ['class' => 'ui dropdown', 'id' => 'ward_id' ]) !!}
</div>

<div class="field">
  {!! Form::label('zone_id', 'Zone') !!}
  {!! Form::select('zone_id', $wards, null, ['class' => 'ui dropdown', 'id' => 'ward_id' ]) !!}
</div>

@section('scripts')
  <script type="text/javascript">
    $('.ui.dropdown').dropdown();
  </script>
@stop
