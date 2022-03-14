<template>
    <div class="administrators text-center">
        <h2>Administrators</h2>
        <ApolloQuery
            :query="require('../../graphql/user/administrators.gql')"
        >
            <template slot-scope="{ result:{ loading, error, data }, isLoading }">
                <div v-if="error">Une erreur est survenue !</div>
                <el-table
                    v-loading="isLoading === 1"
                    :data="tableData(data)"
                    style="width: 100%"
                    >
                    <el-table-column column-key="email" prop="email" label="Email"></el-table-column>
                    <el-table-column column-key="nom" prop="nom" label="Nom"></el-table-column>
                    <el-table-column column-key="prenom" prop="prenom" label="Prenom"></el-table-column>
                    <el-table-column column-key="role" prop="role" label="Role" width="150px" align="center">
                        <template slot-scope="scope">
                            <el-tag v-if="scope.row.role=='super admin'" type="danger">Super Administrator</el-tag>
                            <el-tag v-else>School Administrator</el-tag>
                        </template>
                    </el-table-column>
                    <el-table-column width="180px">
                        <template slot-scope="scope">
                            <el-button size="mini" type="primary" class="ml-0" @click="handleEdit(scope.$index, scope.row)">Edit</el-button>
                            <el-button size="mini" type="danger" class="ml-0" @click="handleDelete(scope.$index, scope.row)">Delete</el-button>
                        </template>
                    </el-table-column>
                </el-table>
            </template>
        </ApolloQuery>
        <el-button type="primary" class="mt-2" @click="createAdmin()">Create administrator</el-button>
    </div>
</template>

<script>
export default {
    name: 'administrators',
    methods: {
        tableData(data) {
            if (!_.isNil(data)) {
                return data.administrators;
            } else {
                return [];
            }
        },
        handleEdit(index, row) {
            //
        },
        handleDelete(index, row) {
            // 
        },
        createAdmin() {
            //
        }
    }
}
</script>