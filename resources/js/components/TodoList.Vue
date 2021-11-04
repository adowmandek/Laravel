 //…/resources/js/components/TodoList.vue

<template>

<ul class=“todo-list”>

<todo v-for=“todo in todo” :todo=“todo” :key=“todo.id” />

</ul>

</template>

&lt;script&gt;
import { mapGetters } from "vuex";
import todo from "../components/Todo";
export default {
  components: {
    todo
  },
  name: "TodoList",
  mounted() {
    this.$store.dispatch("GET_TODOS");
  },
  computed: {
    ...mapGetters(["todos"]),
  }
};
&lt;/script&gt;
