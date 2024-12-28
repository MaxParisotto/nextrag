<template>
  <div id="content" class="app-nextrag">
    <Navigation />
    <NcAppContent>
      <!-- Your main content here -->
      <router-view />
    </NcAppContent>
  </div>
</template>

<script>
import Navigation from './components/Navigation.vue'
import { NcAppContent } from '@nextcloud/vue'

export default {
  name: 'App',
  components: {
    Navigation,
    NcAppContent,
  },
}
</script>

<style scoped>
.app-nextrag {
  display: flex;
  width: 100%;
  height: 100%;
}
</style>
