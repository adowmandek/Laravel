//…/resources/js/components/TodoApp.vue

 &lt;template&gt;
     &lt;section class="todoapp"&gt;
            &lt;header class="header"&gt;
              &lt;h1&gt;todos&lt;/h1&gt;
            &lt;/header&gt;
            &lt;new-todo&gt;&lt;/new-todo&gt;
            &lt;todo-list&gt;&lt;/todo-list&gt;
     &lt;/section&gt;
 &lt;/template&gt;
 &lt;script&gt;
import newTodo from "../components/NewTodo.vue";
import todoList from "../components/TodoList.vue";
import { mapGetters } from "vuex";

export default {
  components: {
   newTodo,
   todoList
  },
  name: "TodoApp",
  mounted() {
    window.Echo.channel("newTask").listen(".task-created", e =&gt; {
      this.$store.commit("ADD_TODO", e.task);
      this.newTodo.title = "";
    });
    window.Echo.channel("taskRemoved").listen(".task-removed", e =&gt; {
        this.$store.commit("DELETE_TODO", this.toRemove);
    });
  },
  computed: {
    ...mapGetters(["newTodo", "toRemove"])
  }
};
&lt;/script&gt;
