<?php $this->layout('master', ['title' => 'Usuários']) ?>


<!-- <form action="/usuarios" method="post">
    <label for="">Nome:</label>
    <input type="text" name="nome"> <br>
    <label for="">Email:</label>
    <input type="text" name="email"> <br>

    <button type="submit">Cadastrar</button>
</form>  -->


<main>
    <header>
        <div style="display: flex; align-items: center;">
            <i class="sidebar-open bx bx-menu"></i>
            <h1>Usuários</h1>
        </div>

        <!-- <div style="display: flex; align-items: center; justify-content: center; gap: 2rem">
            <button id="open-modal-cadastrar" style=" display: flex; align-items: center; justify-content: center; gap:0.8rem; font-size: 1rem; color: white; border: none; background: #081040; cursor: pointer; padding: 6px 16px; border-radius: 8px;">
                Cadastrar
                <i class='bx bxs-user-plus' style="font-size: 1.4rem;"></i>
            </button>

            <button style=" display: flex; align-items: center; justify-content: center; gap:0.8rem; font-size: 1rem; color: white; border: none; background: #081040; cursor: pointer; padding: 6px 16px; border-radius: 8px;">
                Export CSV
                <i class='bx bxs-file-export' style="font-size: 1.2rem;"></i>
            </button>
        </div> -->
    </header>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody id="table-users">
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>alfred@gmail.com</td>
                    <td>10/11/2024</td>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>alfred@gmail.com</td>
                    <td>10/11/2024</td>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>alfred@gmail.com</td>
                    <td>10/11/2024</td>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>alfred@gmail.com</td>
                    <td>10/11/2024</td>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>alfred@gmail.com</td>
                    <td>10/11/2024</td>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>alfred@gmail.com</td>
                    <td>10/11/2024</td>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>alfred@gmail.com</td>
                    <td>10/11/2024</td>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>alfred@gmail.com</td>
                    <td>10/11/2024</td>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>alfred@gmail.com</td>
                    <td>10/11/2024</td>
                </tr>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>alfred@gmail.com</td>
                    <td>10/11/2024</td>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>alfred@gmail.com</td>
                    <td>10/11/2024</td>
                </tr>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>alfred@gmail.com</td>
                    <td>10/11/2024</td>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>alfred@gmail.com</td>
                    <td>10/11/2024</td>
                </tr>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>alfred@gmail.com</td>
                    <td>10/11/2024</td>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>alfred@gmail.com</td>
                    <td>10/11/2024</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div id="pagination" style="display: flex; align-items: center; gap: 1rem; font-size: 1rem; padding-left: 20px;">
        <button onclick="prevPage()" style="border: none; background: none; color: white;">Anterior</button>
        <span id="page-numbers" style="display: flex; align-items: center; gap: 10px;"></span>
        <button onclick="nextPage()" style="border: none; background: none; color: white;">Próximo</button>
    </div>
</main>