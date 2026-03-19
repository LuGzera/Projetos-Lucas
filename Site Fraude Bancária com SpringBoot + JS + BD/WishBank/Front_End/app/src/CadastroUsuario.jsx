import "./CadastroUsuario.css";

export default function CadastroUsuario() {
  return (
    <div className="cadastro-container">
      <h2 className="cadastro-title">Cadastro de Usuário</h2>
      <p className="cadastro-subtitle">Preencha os dados abaixo para criar sua conta</p>

      <div className="cadastro-card">

        <div className="cadastro-section-title">
          <span className="icon">👤</span>
          <div>
            <h3>Informações do Usuário</h3>
            <p>Insira suas informações pessoais corretamente</p>
          </div>
        </div>

        <form className="cadastro-form">

          <label>Nome Completo *</label>
          <input type="text" placeholder="Nome" />

          <label>E-mail *</label>
          <input type="email" placeholder="seu@email.com" />

          <label>Senha *</label>
          <input type="password" placeholder="Digite sua senha" />

          <label>Confirmar Senha *</label>
          <input type="password" placeholder="Repita a senha" />

          <button className="btn-submit">Criar Conta</button>
        </form>

      </div>
    </div>
  );
}