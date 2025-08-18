# 🎓 Colégio Saber - Website Modernizado

Um website moderno e responsivo para o Colégio Saber, uma instituição de ensino em Curitiba, Brasil.

## ✨ Novas Funcionalidades e Melhorias

### 🎨 Design System Moderno
- **Paleta de cores consistente** com variáveis CSS personalizáveis
- **Tipografia moderna** usando Inter e Poppins do Google Fonts
- **Sistema de espaçamento** padronizado com variáveis CSS
- **Sombras e bordas** com design system consistente
- **Animações suaves** e transições para melhor UX

### 📱 Responsividade Aprimorada
- **Mobile-first approach** com breakpoints otimizados
- **Navegação mobile** com menu hambúrguer animado
- **Grid responsivo** que se adapta a todos os dispositivos
- **Imagens otimizadas** para diferentes tamanhos de tela

### 🚀 Performance e Otimização
- **Lazy loading** para imagens da galeria
- **Preload de recursos críticos** (CSS e fontes)
- **Intersection Observer** para animações baseadas em scroll
- **Código JavaScript modular** com classes ES6
- **Otimização de sliders** com configurações responsivas

### ♿ Acessibilidade
- **Navegação por teclado** completa
- **Skip links** para conteúdo principal
- **ARIA labels** e roles apropriados
- **Contraste otimizado** para melhor legibilidade
- **Suporte a leitores de tela**

### 🎯 UX/UI Melhorado
- **Hero section** com call-to-action claro
- **Cards de serviços** com hover effects
- **Formulário de contato** com validação em tempo real
- **Galeria modal** com navegação por teclado
- **Botões flutuantes** de redes sociais
- **Navegação sticky** com efeitos de scroll

### 🔧 Funcionalidades Técnicas
- **Sistema de navegação** com scroll suave
- **Validação de formulários** com feedback visual
- **Integração com WhatsApp** para matrículas
- **Sliders responsivos** com Slick Carousel
- **Modal de galeria** com gestos de fechamento

## 🛠️ Tecnologias Utilizadas

- **HTML5** semântico e acessível
- **CSS3** com variáveis customizadas e Grid/Flexbox
- **JavaScript ES6+** com classes e módulos
- **Slick Carousel** para sliders
- **Font Awesome** para ícones
- **Google Fonts** para tipografia
- **PHP** para backend (get-images.php)

## 📁 Estrutura do Projeto

```
Colegio-Saber/
├── index.php                 # Página principal
├── get-images.php           # API para carregar imagens
├── assets/
│   ├── css/
│   │   └── style.css        # Estilos modernizados
│   ├── js/
│   │   └── events.js        # JavaScript modular
│   ├── img/                 # Imagens do site
│   ├── fonts/               # Fontes personalizadas
│   └── fontawesome-free-5.15.4-web/  # Ícones Font Awesome
└── README.md                # Este arquivo
```

## 🚀 Como Usar

### 1. Configuração Local
```bash
# Clone o repositório
git clone [url-do-repositorio]

# Navegue para o diretório
cd Colegio-Saber

# Configure um servidor local (PHP)
php -S localhost:8000
```

### 2. Personalização
- **Cores**: Edite as variáveis CSS em `assets/css/style.css`
- **Conteúdo**: Modifique o HTML em `index.php`
- **Funcionalidades**: Ajuste o JavaScript em `assets/js/events.js`

### 3. Deploy
- Faça upload dos arquivos para seu servidor web
- Certifique-se de que o PHP está habilitado
- Verifique se `get-images.php` tem permissões de leitura

## 🎨 Personalização de Cores

As cores principais podem ser facilmente alteradas editando as variáveis CSS:

```css
:root {
    --primary-color: #03989E;      /* Azul principal */
    --secondary-color: #7ED957;    /* Verde secundário */
    --accent-color: #008037;       /* Verde de destaque */
    --primary-light: #13E4ED;      /* Azul claro */
    --primary-dark: #076f73;       /* Azul escuro */
}
```

## 📱 Breakpoints Responsivos

- **Desktop**: > 1024px
- **Tablet**: 768px - 1024px
- **Mobile**: < 768px
- **Mobile pequeno**: < 480px

## 🔧 Funcionalidades JavaScript

### Classes Principais
- **ModernNavigation**: Sistema de navegação responsiva
- **ModernGallery**: Galeria com modal e lazy loading
- **ModernSlider**: Sliders responsivos e otimizados
- **SocialMediaManager**: Integração com redes sociais
- **WhatsAppRegistration**: Sistema de matrículas via WhatsApp
- **FormEnhancements**: Validação e melhorias de formulário
- **PerformanceOptimizer**: Otimizações de performance

### Eventos Principais
- Scroll suave para links internos
- Menu mobile com animações
- Validação de formulários em tempo real
- Modal de galeria com gestos
- Navegação por teclado

## 🌟 Recursos de Acessibilidade

- **Skip links** para navegação por teclado
- **ARIA labels** para elementos interativos
- **Contraste otimizado** para melhor legibilidade
- **Suporte a leitores de tela**
- **Navegação por teclado** completa
- **Foco visual** para elementos interativos

## 📊 Performance

- **Lazy loading** de imagens
- **Preload** de recursos críticos
- **Intersection Observer** para animações eficientes
- **CSS otimizado** com variáveis e reutilização
- **JavaScript modular** para melhor manutenção

## 🔒 Segurança

- **Validação de formulários** no frontend
- **Sanitização** de inputs
- **Integração segura** com WhatsApp
- **Links externos** com `rel="noopener,noreferrer"`

## 📈 SEO e Meta Tags

- **Meta tags** otimizadas para busca
- **Títulos descritivos** para cada seção
- **Alt text** para todas as imagens
- **Estrutura HTML** semântica
- **Schema markup** para melhor indexação

## 🚀 Próximas Melhorias Sugeridas

- [ ] **PWA** (Progressive Web App)
- [ ] **Blog/Notícias** integrado
- [ ] **Sistema de agendamento** online
- [ ] **Chat ao vivo** para atendimento
- [ ] **Analytics** avançado
- [ ] **Testes A/B** para otimização
- [ ] **Cache inteligente** para melhor performance
- [ ] **Compressão de imagens** automática

## 🤝 Contribuição

1. Faça um fork do projeto
2. Crie uma branch para sua feature (`git checkout -b feature/AmazingFeature`)
3. Commit suas mudanças (`git commit -m 'Add some AmazingFeature'`)
4. Push para a branch (`git push origin feature/AmazingFeature`)
5. Abra um Pull Request

## 📄 Licença

Este projeto está sob a licença MIT. Veja o arquivo `LICENSE` para mais detalhes.

## 📞 Suporte

Para suporte ou dúvidas sobre o website:
- **Email**: [seu-email@exemplo.com]
- **WhatsApp**: (41) 99509-8043
- **Telefone**: (41) 3322-3474

---

**Desenvolvido com 💙 para o Colégio Saber**

*Excelência no ensino desde 2014*
