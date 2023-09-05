import { useForm } from "@inertiajs/react";
import { useState } from "react";

function AddCategory(props) {
    const { data, setData, post, processing, errors } = useForm({
        // id: "",
        name: "",
        description: "",

    });
    const handleSubmit = (e) => {
        e.preventDefault();
        post(route("category.store"));
        console.log(data);
    };
    return (
        <div className="bg-secondary row ">
            <div className="container-fluid mt-5 d-flex justify-content-center flex-column w-50 shadow p-3 mb-5 bg-white rounded ">
                <h1 className="fw-bolder ">Submission Form</h1>
                <form onSubmit={handleSubmit}>


                    <div className="mb-3 ">
                        {/* <p>{data.name}</p> */}
                        <label className="form-label fw-bolder">Name</label>
                        <input
                            value={data.name}
                            placeholder="enter name"
                            className={
                                "form-control " +
                                (errors.name ? "is-invalid" : "")
                            }
                            onChange={(e) => setData("name", e.target.value)}
                        />
                        <div className="invalid-feedback">{errors.name}</div>
                    </div>

                    <div className="mb-3 ">
                        <label className="form-label fw-bolder">Description</label>
                        <input
                            className={
                                "form-control " +
                                (errors.description ? "is-invalid" : "")
                            }
                            value={data.description}
                            placeholder="enter name"
                            onChange={(e) => setData("description", e.target.value)}
                        />
                        <div className="invalid-feedback">{errors.description}</div>
                    </div>

                    <button
                        type="submit"
                        onClick={handleSubmit}
                        className="btn btn-success"

                    >
                        {processing ? (
                            <span
                                className="spinner-border spinner-border-sm mx-2"
                                role="status"
                                aria-hidden="true"
                            ></span>
                        ) : (
                            ""
                        )}
                        submit
                    </button>
                </form>
            </div>
        </div>
    );
}
export default function Categories(props) {
    const [addCategory, setAddCategory] = useState(false);
    const [viewCategory, setViewCategory] = useState(null);

    const handleAddNew = () => {
        setAddCategory(!addCategory);
        setViewCategory(null);
    };

    const handleViewCategory = (category) => {
        setViewCategory(category);
    };

    return (
        <div className="container mt-5">
            <div className="card">
                <div className="card-body">
                    <h1 className="card-title">List Of All Categories</h1>
                    <div className="my-3">
                        <div
                            className="btn-group"
                            role="group"
                            aria-label="Basic-example"
                        >
                            <button
                                type="button"
                                className="btn btn-md btn-primary"
                                onClick={handleAddNew}
                            >
                                {addCategory ? "ListAll" : " Add New"}
                            </button>
                            <button
                                type="button"
                                className="btn btn-md btn-success"
                            >
                                Export
                            </button>
                            <button
                                type="button"
                                className="btn btn-md btn-warning"
                            >
                                Print
                            </button>
                        </div>
                    </div>
                    {addCategory ? (
                        <AddCategory categories={props.categories} />
                    ) : viewCategory != null ? (
                        <ViewCategory
                            category={viewCategory}
                            categories={props.categories}
                        />
                    ) : (
                        <ListCategories
                            handleView={handleViewCategory}
                            categories={props.categories}
                        />
                    )}
                </div>
            </div>
        </div>
    );
}
function ListCategories(props) {
    const [viewCategory, setViewCategory] = useState(null);
    const handleViewCategory = (category) => {
        setViewCategory(category);
    };

    return (
        <table className="table table-responsive">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody className="text-primary">
                {props.categories.map((category, index) => (
                    <tr
                        key={category.id}
                        className={(index + 1) % 2 == 0 ? "bg-light" : ""}
                    >
                        <td> {index + 1}</td>
                        <td>{category.category_name}</td>
                        <td>{category.description}</td>
                        <td className="text-nowrap text-end">
                            <button
                                className="btn btn-sm btn-primary mx-1"
                                onClick={() => props.handleView(category)}

                            >

                                {" "}
                                View
                            </button>

                            <DeleteButton id={category.id} />
                        </td>

                    </tr>
                ))}
            </tbody>
        </table>
    );
}

function DeleteButton({ id }) {
    const { post, processing } = useForm();
    const handleDelete = () => {
        post(route("category.delete", id), {
            onSuccess: () => alert("Category deleted successfully"),
            onError: () => alert("Failed to delete category"),
        });
    };

    return (
        <button onClick={handleDelete} className="btn btn-sm btn-danger" disabled={processing}>
            {processing ? (
                <span
                    className="spinner-border spinner-border-sm mx-2"
                    role="status"
                    aria-hidden="true"
                ></span>
            ) : (
                ""
            )}
            Delete
        </button>

    );
}

function ViewCategory(props) {
    const { data, setData, post, processing, errors } = useForm({
        id: props.category.id,
        name: props.category.category_name,
        description: props.category.description,

    });
    const handleSubmit = (e) => {
        e.preventDefault();
        post(route("category.update", props.category.id), {
            onSuccess: () => alert("Category updated successfully"),
            onError: () => alert("failed to update category"),
        });
        // console.log("submit");
    };
    return (
        <div className="bg-secondary row ">
            <div className="container-fluid mt-5 d-flex justify-content-center flex-column w-50 shadow p-3 mb-5 bg-white rounded ">
                <h1 className="fw-bolder ">Registration Form</h1>
                <form onSubmit={handleSubmit}>
                    <div className="mb-3 ">
                        {/* <p>{data.name}</p> */}
                        <label className="form-label fw-bolder">Name</label>
                        <input
                            value={data.name}
                            placeholder="enter name"
                            className={
                                "form-control " +
                                (errors.name ? "is-invalid" : "")
                            }
                            onChange={(e) => setData("name", e.target.value)}
                        />
                        <div className="invalid-feedback">{errors.name}</div>
                    </div>

                    <div className="mb-3 ">
                        <label className="form-label fw-bolder">Description</label>
                        <input
                            className={
                                "form-control " +
                                (errors.description ? "is-invalid" : "")
                            }
                            value={data.description}
                            placeholder="enter name"
                            lassName="form-control"
                            onChange={(e) => setData("description", e.target.value)}
                        />
                        <div className="invalid-feedback">{errors.description}</div>
                    </div>

                    <button
                        type="submit"
                        onClick={handleSubmit}
                        className="btn btn-success"
                        disabled={processing}
                    >
                        {processing ? (
                            <span
                                className="spinner-border spinner-border-sm mx-2"
                                role="status"
                                aria-hidden="true"
                            ></span>
                        ) : (
                            ""
                        )}
                        Update
                    </button>
                </form>
            </div>
        </div>
    );
}
