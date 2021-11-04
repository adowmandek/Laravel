let actions = {

    ADD_TODO(todo) {

    axios.post(/api/todos, todo).then(res => {

    if (res.data === added)

    console.log(ok)

    }).catch(err => {

    console.log(err)

    })

    }
}



    axios.delete(/api/todo/$todo.id)

    then(res => {

    if (res.data === deleted)

    console.log(deleted)

    }).catch(err => {

    console.log(err)

    });



    GET_TODOS({commit})

    axios.get(api/todos)

    .then(res => {

    {  console.log(res.data)

    commit(GET_TODOS, res.data)

    }

    }).catch(err => {

    console.log(err)

    })





    export default actions
