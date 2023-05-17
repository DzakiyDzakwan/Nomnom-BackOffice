/* Modal */
const createModal = new bootstrap.Modal("#createModal");
const editModal = new bootstrap.Modal("#editModal");
const deleteModal = new bootstrap.Modal("#deleteModal");

window.addEventListener("toggle-create", (event) => {
    createModal.toggle();
});

window.addEventListener("toggle-edit", (event) => {
    editModal.toggle();
});

window.addEventListener("toggle-delete", (event) => {
    deleteModal.toggle();
});
