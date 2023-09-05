
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
                </tr>
            </thead>
            <tbody className="text-primary">
                {props.products.map((product, index) => (
                    <tr key={product.id} className={(index + 1) % 2 == 0 ? 'bg-light' : ''}>
                        < td > {index + 1}</td>
                        <td>{product.name}</td>
                        <td>{product.display}</td>
                        <td>{product.stand}</td>
                        <td>{product.adapter}</td>
                        <td className="text-nowrap text-end">
                            <button className="btn btn-sm btn-primary mx-1"> View</button>
                            <button className="btn btn-sm btn-danger mx-1"> Delete</button>
                        </td>
                    </tr>))}

            </tbody>


        </table>
    )
}

export default ListProducts;