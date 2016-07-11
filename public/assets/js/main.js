new Vue({
	el:"#app",
	data: {
		message : 'HeLLo Simo',
		test : [
		{ text : "test1"},
		{ text : "test2"},
		{ text : "test3"}
		]
	},
	methods : {
		klebo : function(){
			this.message = this.message.split('').reverse().join('')
		}
	}
})

new Vue({
	el : '#simo',
	data : {
		newTodo : '',
		todos : [
		{ text: 'Add some todos'}
		]
	},
	methods : {
		addTodo : function()
		{
			var text = this.newTodo.trim()
			if(text)
			{
				this.todos.push({ text: text })
				this.newTodo = ''
			}
		},
		removeTodo : function (index){
			this.todos.splice(index, 1)
		}
	}
})