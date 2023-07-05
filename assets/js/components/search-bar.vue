<template>
    <div>
        <input
            v-model="searchTerm"
            placeholder="Search Products"
            class="form-control"
            type="search"
        >
    </div>
</template>

<script>
export default {
    name: 'SearchBar',
    data() {
        return {
            searchTerm: '',
        };
    },
};
</script>
