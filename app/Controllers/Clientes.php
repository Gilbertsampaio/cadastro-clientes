<?php

namespace App\Controllers;

use App\Models\ClienteModel;
use CodeIgniter\Controller;

class Clientes extends Controller
{
    protected $clienteModel;

    public function __construct()
    {
        $this->clienteModel = new ClienteModel();
        helper(['form', 'url']);
    }

    public function index()
    {
        $data['clientes'] = $this->clienteModel->findAll();
        echo view('clientes/index', $data);
    }

    public function criar()
    {
        echo view('clientes/form');
    }

    public function salvar()
    {
        $validation =  \Config\Services::validation();

        $valid = $this->validate([
            'nome'     => 'required|min_length[3]|max_length[100]',
            'email'    => 'required|valid_email',
            'telefone' => 'required|min_length[10]|max_length[20]',
            'foto'     => [
                'uploaded[foto]',
                'is_image[foto]',
                'max_size[foto,2048]',
            ],
        ]);

        if (!$valid) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $foto = $this->request->getFile('foto');
        $nomeFoto = null;

        if ($foto->isValid() && !$foto->hasMoved()) {
            $nomeFoto = $foto->getRandomName();
            $foto->move('uploads', $nomeFoto);
        }

        $this->clienteModel->save([
            'nome'     => $this->request->getPost('nome'),
            'email'    => $this->request->getPost('email'),
            'telefone' => $this->request->getPost('telefone'),
            'foto'     => $nomeFoto,
        ]);

        return redirect()->to('/clientes');
    }

    public function editar($id = null)
    {
        $cliente = $this->clienteModel->find($id);

        if (!$cliente) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Cliente não encontrado.");
        }

        echo view('clientes/form', ['cliente' => $cliente]);
    }

    public function atualizar($id = null)
    {
        $validation =  \Config\Services::validation();

        $valid = $this->validate([
            'nome'     => 'required|min_length[3]|max_length[100]',
            'email'    => 'required|valid_email',
            'telefone' => 'required|min_length[10]|max_length[20]',
            'foto'     => [
                'is_image[foto]',
                'max_size[foto,2048]',
            ],
        ]);

        if (!$valid) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $cliente = $this->clienteModel->find($id);
        if (!$cliente) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Cliente não encontrado.");
        }

        $foto = $this->request->getFile('foto');
        $nomeFoto = $cliente['foto'];

        if ($foto->isValid() && !$foto->hasMoved()) {
            // Remove a foto antiga, se existir
            if ($nomeFoto && file_exists('uploads/' . $nomeFoto)) {
                unlink('uploads/' . $nomeFoto);
            }

            $nomeFoto = $foto->getRandomName();
            $foto->move('uploads', $nomeFoto);
        }

        $this->clienteModel->update($id, [
            'nome'     => $this->request->getPost('nome'),
            'email'    => $this->request->getPost('email'),
            'telefone' => $this->request->getPost('telefone'),
            'foto'     => $nomeFoto,
        ]);

        return redirect()->to('/clientes');
    }

    public function excluir($id = null)
    {
        $cliente = $this->clienteModel->find($id);

        if (!$cliente) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Cliente não encontrado.");
        }

        if ($cliente['foto'] && file_exists('uploads/' . $cliente['foto'])) {
            unlink('uploads/' . $cliente['foto']);
        }

        $this->clienteModel->delete($id);

        return redirect()->to('/clientes');
    }
}