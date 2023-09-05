import { useForm } from "@inertiajs/react";
import { useState } from "react";

function AddProduct(props) {
    const { data, setData, post, processing, errors } = useForm({
        category_id: "",
        name: "",
        display: "",
        adapter: "",
        stand: "",
        total: "",
    });
    const handleSubmit = (e) => {
        e.preventDefault();
        post(route("product.store"));
        // console.log("submit");
    };
    return (
        <div className="bg-secondary row ">
            <div className="container-fluid mt-5 d-flex justify-content-center flex-column w-50 shadow p-3 mb-5 bg-white rounded ">
                <h1 className="fw-bolder ">Registration Form</h1>
                <form onSubmit={handleSubmit}>
                    <div className="mb-3  ">
                        {/* <p>{data.name}</p> */}
                        <label className="form-label fw-bolder">
                            Select Category
                        </label>
                        <select
                            value={data.category_id}
                            className={
                                "form-select " +
                                (errors.category_id ? "is-invalid" : "")
                            }
                            onChange={(e) =>
                                setData("category_id", e.target.value)
                            }
                        >
                            <option value="">Select Category ...</option>
                            {props.categories.map((category) => (
                                <option key={category.id} value={category.id}>
                                    {category.category_name}
                                </option>
                            ))}
                        </select>
                        <div className="invalid-feedback">
                            {errors.category_id}
                        </div>
                    </div>

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
                        <label className="form-label fw-bolder">Display</label>
                        <input
                            className={
                                "form-control " +
                                (errors.display ? "is-invalid" : "")
                            }
                            value={data.display}
                            placeholder="enter name"
                            lassName="form-control"
                            onChange={(e) => setData("display", e.target.value)}
                        />
                        <div className="invalid-feedback">{errors.display}</div>
                    </div>

                    <div className="mb-3 ">
                        <label className="form-label fw-bolder">Stand</label>
                        <input
                            className={
                                "form-control " +
                                (errors.stand ? "is-invalid" : "")
                            }
                            value={data.stand}
                            placeholder="enter name"
                            lassName="form-control"
                            onChange={(e) => setData("stand", e.target.value)}
                        />
                        <div className="invalid-feedback">{errors.stand}</div>
                    </div>
                    <div className="mb-3 w-100">
                        <label className="form-label fw-bolder">Adapter</label>
                        <input
                            className={
                                "form-control " +
                                (errors.adapter ? "is-invalid" : "")
                            }
                            value={data.adapter}
                            placeholder="enter name"
                            lassName="form-control"
                            onChange={(e) => setData("adapter", e.target.value)}
                        />
                        <div className="invalid-feedback">{errors.adapter}</div>
                    </div>

                    <div className="mb-3 ">
                        <label className="form-label fw-bolder">Total</label>
                        <input
                            className={
                                "form-control " +
                                (errors.total ? "is-invalid" : "")
                            }
                            value={data.total}
                            placeholder="enter name"
                            lassName="form-control"
                            onChange={(e) => setData("total", e.target.value)}
                        />
                        <div className="invalid-feedback">{errors.total}</div>
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

function ViewProduct(props) {
    const { data, setData, post, processing, errors } = useForm({
        category_id: props.product.category_id,
        name: props.product.name,
        display: props.product.display,
        adapter: props.product.adapter,
        stand: props.product.stand,
        total: props.product.total,
    });
    const handleSubmit = (e) => {
        e.preventDefault();
        post(route("product.update", props.product.id), {
            onSuccess: () => alert("Product updated successfully"),
            onError: () => alert("failed to update product"),
        });
        // console.log("submit");
    };
    return (
        <div className="bg-secondary row ">
            <div className="container-fluid mt-5 d-flex justify-content-center flex-column w-50 shadow p-3 mb-5 bg-white rounded ">
                <h1 className="fw-bolder ">Registration Form</h1>
                <form onSubmit={handleSubmit}>
                    <div className="mb-3  ">
                        {/* <p>{data.name}</p> */}
                        <label className="form-label fw-bolder">
                            Select Category
                        </label>
                        <select
                            defaultValue={data.category_id}
                            className={
                                "form-select " +
                                (errors.category_id ? "is-invalid" : "")
                            }
                            onChange={(e) =>
                                setData("category_id", e.target.value)
                            }
                        >
                            <option value="">Select Category ...</option>
                            {props.categories.map((category) => (
                                <option key={category.id} value={category.id}>
                                    {category.category_name}
                                </option>
                            ))}
                        </select>
                        <div className="invalid-feedback">
                            {errors.category_id}
                        </div>
                    </div>

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
                        <label className="form-label fw-bolder">Display</label>
                        <input
                            className={
                                "form-control " +
                                (errors.display ? "is-invalid" : "")
                            }
                            value={data.display}
                            placeholder="enter name"
                            lassName="form-control"
                            onChange={(e) => setData("display", e.target.value)}
                        />
                        <div className="invalid-feedback">{errors.display}</div>
                    </div>

                    <div className="mb-3 ">
                        <label className="form-label fw-bolder">Stand</label>
                        <input
                            className={
                                "form-control " +
                                (errors.stand ? "is-invalid" : "")
                            }
                            value={data.stand}
                            placeholder="enter name"
                            lassName="form-control"
                            onChange={(e) => setData("stand", e.target.value)}
                        />
                        <div className="invalid-feedback">{errors.stand}</div>
                    </div>
                    <div className="mb-3 w-100">
                        <label className="form-label fw-bolder">Adapter</label>
                        <input
                            className={
                                "form-control " +
                                (errors.adapter ? "is-invalid" : "")
                            }
                            value={data.adapter}
                            placeholder="enter name"
                            lassName="form-control"
                            onChange={(e) => setData("adapter", e.target.value)}
                        />
                        <div className="invalid-feedback">{errors.adapter}</div>
                    </div>

                    <div className="mb-3 ">
                        <label className="form-label fw-bolder">Total</label>
                        <input
                            className={
                                "form-control " +
                                (errors.total ? "is-invalid" : "")
                            }
                            value={data.total}
                            placeholder="enter name"
                            lassName="form-control"
                            onChange={(e) => setData("total", e.target.value)}
                        />
                        <div className="invalid-feedback">{errors.total}</div>
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

function ListProducts(props) {

    return (
        <table className="table table-responsive">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Display</th>
                    <th>Stand</th>
                    <th>Adapter</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody className="text-primary">
                {props.products.map((product, index) => (
                    <tr
                        key={product.id}
                        className={(index + 1) % 2 == 0 ? "bg-light" : ""}
                    >
                        <td> {index + 1}</td>
                        <td>{product.name}</td>
                        <td>{product.display}</td>
                        <td>{product.stand}</td>
                        <td>{product.adapter}</td>
                        <td>{product.total}</td>
                        <td className="text-nowrap text-end">
                            <button
                                className="btn btn-sm btn-primary mx-1"
                                onClick={() => props.handleView(product)}

                            >

                                {" "}
                                View
                            </button>

                            <DeleteButton id={product.id} />
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
        post(route("product.delete", id), {
            onSuccess: () => alert("Product deleted successfully"),
            onError: () => alert("Failed to delete product"),
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

function Products(props) {
    const [addProduct, setAddProduct] = useState(false);
    const [viewProduct, setViewProduct] = useState(null);

    const handleAddNew = () => {
        setAddProduct(!addProduct);
        setViewProduct(null);
    };

    const handleViewProduct = (product) => {
        setViewProduct(product);
    };

    return (
        <div className="container mt-5">
            <div className="card">
                <div className="card-body">
                    <h1 className="card-title">List Of All Products</h1>
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
                                {addProduct ? "ListAll" : " Add New"}
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
                    {addProduct ? (
                        <AddProduct categories={props.categories} />
                    ) : viewProduct != null ? (
                        <ViewProduct
                            product={viewProduct}
                            categories={props.categories}
                        />
                    ) : (
                        <ListProducts
                            handleView={handleViewProduct}
                            products={props.products}
                        />
                    )}
                </div>
            </div>
        </div>
    );
}

export default Products;