@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="page-header">
                <h1>Etymology</h1>
            </div>

            <table class="table table-bordered table-condensed table-hover table-responsive table-striped" id="table">
	            <thead>
	                <tr>
						<th>id</th>
						<th>lemma_id</th>
						<th>headword</th>
						<th>lemma</th>
						<th>pos</th>
						<th>gender</th>
						<th>language</th>
						<th>origin_family</th>
						<th>origin</th>
						<th>short_path</th>
						<th>origin_path</th>
						<th>etymology_text</th>
						<th>first_use</th>
						<th>lang</th>
						<th>pageid</th>
						<th>term</th>
						<th>non_latin_script</th>
						<th>lang_2</th>
						<th>gloss</th>
						<th>sequence</th>
						<th>lemma_id_fk</th>
						<th>derivatives_id</th>
						<th>etymology_id</th>
						<th>meaning</th>
						<th>semantic_category</th>
						<th>semantic_field</th>
						<th>simplicity_score</th>
						<th>age_score</th>
						<th>borrowed_score</th>
						<th>description</th>
						<th>typical_context</th>
						<th>representation</th>
						<th>sub_code</th>
	                </tr>            	
	            </thead>

				<tbody>
				@foreach($results as $result)
					<tr>
						<td>{{$result->id}}</td>
						<td>{{$result->lemma_id}}</td>
						<td>{{$result->headword}}</td>
						<td>{{$result->lemma}}</td>
						<td>{{$result->pos}}</td>
						<td>{{$result->gender}}</td>
						<td>{{$result->language}}</td>
						<td>{{$result->origin_family}}</td>
						<td>{{$result->origin}}</td>
						<td>{{$result->short_path}}</td>
						<td>{{$result->origin_path}}</td>
						<td>{{$result->etymology_text}}</td>
						<td>{{$result->first_use}}</td>
						<td>{{$result->lang}}</td>
						<td>{{$result->pageid}}</td>
					</tr>
        		@endforeach
        		</tbody>
        	</table>
    	</div>
	</div>

</div>
@stop
