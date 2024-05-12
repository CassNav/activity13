<template>
  <div id="app">
    <input type="text" v-model="noteId" placeholder="Enter note ID">
    <button @click="fetchNote">Get Note</button>

    <table v-if="note">
      <thead>
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Content</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{ note.id }}</td>
          <td>{{ note.title }}</td>
          <td>{{ note.content }}</td>
        </tr>
      </tbody>
    </table>
    <div v-if="error">{{ error }}</div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'App',
  data() {
    return {
      noteId: '',
      note: null,
      error: ''
    };
  },
  methods: {
    fetchNote() {
      axios.get(`http://localhost:8000/notes}/${this.noteId}`)
        .then(response => {
          this.note = response.data;
          this.error = '';
        })
        .catch(error => {
          this.error = 'Note not found';
          this.note = null;
        });
    }
  }
}
</script>
