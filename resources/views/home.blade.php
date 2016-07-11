<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
<div id="app">
  @{{ message }}
  <input v-model="message">
  <ul>
  	<li v-for="testos in test">
  		@{{ testos.text }}
  	</li>
  </ul>
  </br>
  @{{ message }}
  </br>
  <button v-on:click="klebo">Reverse Message</button>
</div>

<div id="simo">
	<input v-model="newTodo" v-on:keyup.enter="addTodo">
	<ul>
		<li v-for="todo in todos">
			<span>@{{ todo.text }}</span>
		</li>
		<button v-on:click="removeTodo($index)">X</button>
	</ul>
</div>
</br>
<div>@{{{ raw_html }}}</div>
</body>
<script type="text/javascript" src="{{ URL::to('assets/js/vue.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/js/main.js') }}"></script>
</html>