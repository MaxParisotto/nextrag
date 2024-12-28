<template>
	<NcAppNavigation>
		<NcAppNavigationNew
			:text="t('nextrag', 'New item')"
			@click="onNewItem" />

		<NcAppNavigationItem
			id="all"
			:name="t('nextrag', 'All')"
			icon="icon-home"
			:exact="true"
			:to="{ name: 'all' }" />

		<NcAppNavigationItem
			id="favorites"
			:name="t('nextrag', 'Favorites')"
			icon="icon-favorite"
			:to="{ name: 'favorites' }" />

		<template #footer>
			<NcAppNavigationSettings>
				<NcAppNavigationItem
					id="settings"
					:name="t('nextrag', 'Settings')"
					icon="icon-settings"
					@click="onSettings" />
			</NcAppNavigationSettings>
		</template>
	</NcAppNavigation>
</template>

<script>
import { NcAppNavigation, NcAppNavigationNew, NcAppNavigationItem, NcAppNavigationSettings } from '@nextcloud/vue'

export default {
	name: 'Navigation',
	components: {
		NcAppNavigation,
		NcAppNavigationNew,
		NcAppNavigationItem,
		NcAppNavigationSettings,
	},
	methods: {
		onNewItem() {
			// Handle new item creation
			console.log('New item clicked')
		},
		onSettings() {
			// Handle settings click
			console.log('Settings clicked')
		},
	},
}
</script>
