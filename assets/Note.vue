<template>
<div>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#newNoteModal">
    Add Note
  </button>

  <div class="mt-5">
    <div v-for="note in notes" :id="note.id">
      <h5>{{ note.title }}</h5>
      <p>{{ note.desc }}</p>
      <span class="badge rounded-pill text-bg-success" v-for="tag in note.tags" :id="tag.id">{{ tag.name }}</span>
      <p><button type="button" class="btn btn-danger mt-3" @click="deleteNote(note.id)">Delete</button></p>
      <hr class="text-danger border-2 opacity-50">
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="newNoteModal" tabindex="-1" aria-labelledby="newNoteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="newNoteModalLabel">Add Note</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="newNoteTitle" class="form-label">Title</label>
            <input type="email" class="form-control" id="newNoteTitle" v-model="newTitle">
          </div>
          <div class="mb-3">
            <label for="newNoteDesc" class="form-label">Description</label>
            <textarea class="form-control" id="newNoteDesc" rows="3" v-model="newDesc"></textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">Tags</label>
            <div class="form-check" v-for="tag in tags">
              <input class="form-check-input" name="newTag" type="checkbox" :value="tag.id" id="flexCheckDefault" :id="tag.id" v-model="newTags">
              <label class="form-check-label" for="flexCheckDefault">
                {{ tag.name }}
              </label>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-success" @click="addNote">Add</button>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>

</template>

<script>
export default {
  name: "Note",
  data: () => {
    return {
      modalElement: '',
      modalObj: '',
      newTitle: '',
      newDesc: '',
      newTags: [],
    }
  },
  props: [
    'notes',
      'tags'
  ],
  methods: {
    addNote() {
      const data = {
        "title": this.newTitle,
        "desc": this.newDesc,
        "tags": this.newTags
      };

      fetch('http://localhost:8080/notes', {
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
      this.getNotes()
      this.$emit("reloadWindow", true);
    },
    getNotes() {
      fetch(`http://localhost:8080/notes`, { method: 'GET' })
          .then(response => response.json())
          .then(data => {
            this.notes = JSON.parse(JSON.stringify(data)).notes;
            this.$emit("reloadWindow", true);
          })
          .catch((error) => {
            console.error('Error:', error);
          });
    },
    deleteNote(id) {
      fetch(`http://localhost:8080/notes/${id}`, { method: 'DELETE' })
          .then(response => response.json())
          .then(data => {
            console.log('Success:', data);
            this.$emit("reloadWindow", true);
          })
          .catch((error) => {
            console.error('Error:', error);
          });
    }
  },
  mounted() {
    this.modalElement = document.getElementById("newNoteModal");
    this.modalObj = new bootstrap.Modal(this.modalElement);
  }
}
</script>

<style scoped>

</style>