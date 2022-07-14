<template>
<div>
  <nav class="navbar bg-light">
    <div class="container-fluid">
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" v-model="newTag">
        <button class="btn btn-outline-success" type="submit" @click="addTag">Add Tag</button>
      </form>
    </div>
  </nav>

  <div class="mb-3 row" v-for="tag in tags">
    <label class="col-sm-2 col-form-label">{{tag.name}}</label>
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary mb-3" @click="deleteTag(tag.id)">Delete</button>
    </div>
  </div>


</div>
</template>

<script>
export default {
  name: "Tag",
  data: () => {
    return {
      newTag: '',
      deleteTagId : ''
    }
  },
  props: [
    'tags'
  ],
  methods: {
    addTag() {
      const data = {
        "name": this.newTag
      };

      fetch('http://localhost:8080/tags', {
        method: 'POST', // or 'PUT'
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
      })
          .then(response => response.json())
          .then(data => {
            console.log('Success:', data);

          })
          .catch((error) => {
            console.error('Error:', error);
          });
    },
    deleteTag(id) {
      fetch(`http://localhost:8080/tags/${id}`, { method: 'DELETE' })
          .then(response => response.json())
          .then(data => {
            console.log('Success:', data);
          })
          .catch((error) => {
            console.error('Error:', error);
          });
    }
  }
}
</script>

<style scoped>

</style>