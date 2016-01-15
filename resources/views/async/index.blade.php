@extends('layout.app')

@section('content')
	<div class="docs-section" id="docsection-result">
		<h6 class="docs-header">Usage of bar chart</h6>
		<div class="row">
			<pre>
				<code class="html">				

				{{ var_dump(json_decode($data)) }}
				</code>
			</pre>
		</div>
		<h6 class="docs-header">Result</h6>
	</div>
@endsection