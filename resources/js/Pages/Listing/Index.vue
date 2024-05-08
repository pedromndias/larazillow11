<template>
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
        <Box v-for="listing in listings" :key="listing.id">
            <Link :href="`/listing/${listing.id}`">
                <ListingAddress :listing="listing" />
            </Link>
        </Box>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import ListingAddress from "../../Components/ListingAddress.vue";
import Box from "../../Components/UI/Box.vue";
defineProps({
    listings: Array,
});
</script>
