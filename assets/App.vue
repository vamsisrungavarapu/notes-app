<template>
  <div class="container">
  <!--    Navbar-->
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <button class="nav-link active" @click="toggleNote">Notes</button>
            </li>
            <li class="nav-item">
              <button class="nav-link" @click="toggleTag">Tags</button>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <Note v-if="displayNote" :notes="notes" :tags="tags" @reloadWindow="reloadWindow"/>

    <Tag :tags="tags" v-if="displayTag"/>
  </div>
</template>

<script>
import Note from './Note';
import Tag from './Tag';
export default {
  name: "App",
  props: [
      'notes',
      'tags'
  ],
  components: {
    Note,
    Tag
  },
  data() {
    return {
      displayNote: true,
      displayTag:false
    }
  },
  methods: {
    toggleNote() {
      this.displayTag = false;
      this.displayNote = true;
    },
    toggleTag() {
      this.displayNote = false;
      this.displayTag = true;
    },
    reloadWindow() {
      location.reload();
    }

  },
  mounted() {
  }
}
</script>

<style scoped>

</style>