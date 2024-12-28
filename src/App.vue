<template>
  <NcContent app-name="nextrag">
    <NcAppNavigation>
      <template #list>
        <NcAppNavigationItem
          id="home"
          icon="icon-home"
          :exact="true"
          title="Home"
          to="/"
        />
        <NcAppNavigationItem
          id="useful"
          icon="icon-category-tools"
          title="Useful"
          to="/useful"
        />
      </template>
    </NcAppNavigation>

    <NcAppContent>
      <router-view />
    </NcAppContent>
  </NcContent>
</template>

<script>
import { NcContent, NcAppNavigation, NcAppNavigationItem, NcAppContent } from '@nextcloud/vue'

export default {
  name: 'App',
  components: {
    NcContent,
    NcAppNavigation,
    NcAppNavigationItem,
    NcAppContent
  }
}
</script>

<style scoped lang="scss">
#nextrag {
	display: flex;
	justify-content: center;
	margin: 16px;
}
</style>
