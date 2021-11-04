let mutations = {

    ADD_TODO(state, todo) {

    state.todos.unshift(todo)

    },

    CACHE_REMOVED(state, todo) {

    state.toRemove = todo;

    },

    GET_TODO(state, todo) {

    state.todo = todo

    },

    DELETE_TODO(state, todo) {

    state.todo.splice(state.todo.indexOf(todo), 1)

    state.toRemove = null;

    }

    }

    export default mutations
